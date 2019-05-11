//Author : Ray
//PhpStorm 2019/5/4

let  isAccessed = false;
let  isMobile = navigator.userAgent.toLowerCase().match(/(ipod|iphone|android|coolpad|mmp|smartphone|midp|wap|xoom|symbian|j2me|blackberry|win ce)/i) != null;
let  pictrueHeight = isMobile ? 480 : 640;//如果是手机就换成3:4拍照模式
let  pictrueWidth = isMobile ? 640 : 480;
$("#Fv-Canvas").attr("width",pictrueWidth);
$("#Fv-Canvas").attr("height",pictrueHeight);
function getPhotoAccess() { //获取摄像头权限并开始拍照方便取像
    if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
        navigator.mediaDevices.getUserMedia({ video: { facingMode: "user" } }).then(function(stream) {
            //video.src = window.URL.createObjectURL(stream);
            let video = document.getElementById('Fv-Video');
            video.srcObject = stream;
            while(stream == null) isAccessed = false;
            isAccessed = true;
            video.play();
            stream.getTracks()[0].stop();
        });
    }
}
function openREC(){ //开五秒摄像头
    let  canvas = document.getElementById('Fv-Canvas');
    let  context = canvas.getContext('2d');
    let  video = document.getElementById('Fv-Video');
    if (isAccessed) {
        let videoMode = true;
        if (isMobile) videoMode = { facingMode: "user" };
        navigator.mediaDevices.getUserMedia({ video: videoMode }).then(function(stream) {
            video.srcObject = stream;
            while(stream == null) isAccessed = false;
            isAccessed = true;
            video.play();
            setTimeout(function(){
                stream.getTracks()[0].stop();
            },5000);
        });
    }

}
function takePhoto() { //直接拍照
    let  canvas = document.getElementById('Fv-Canvas');
    let  context = canvas.getContext('2d');
    let  video = document.getElementById('Fv-Video');
    if (isAccessed) {
        context.drawImage(video, 0, 0, pictrueHeight, pictrueWidth);
    }else return '';
    return encodeURIComponent(canvas.toDataURL('image/jpeg').split(",")[1]);
}
function addMember(userid) {
    Fv('main', {
        fun: 1,
        file: [faceid1, faceid2, faceid3],
        check: [true, function(ID) {
            // Fun Callback
        }]
    }, function(ID) {
        /* Callback */
        let isSuccess = false;
        openREC();
        setTimeout(function(){
            let imgData = takePhoto();
            let FvWillFadeOut = ID[1];
            let FvWillRemove = ID[0];
            if(imgData !== ''){
                $.ajax({
                    type: 'post',
                    url: '../core.php',
                    data: 'access=Ray&method=addMember&personID=' + userid + '&image=' + imgData + '&verifyLive=' + isMobile,
                    cache: false,
                    dataType: 'json',
                    success: function (data) {
                        if (data['code'] === 2) {
                            isSuccess = true;
                            console.log(data['Info']);
                        } else {
                            isSuccess = false;
                            console.warn(data['Response']['Error']['Message']);
                        }
                        if(isSuccess){
                            Fv('main', {
                                fun: 2,
                                file: [faceid1, faceid2, faceid3],
                                check: [true, function(ID) {
                                    // Fun Callback
                                }]
                            }, function(ID) {
                                /* Callback */
                                setTimeout(function() {
                                    $('#' + ID[1]).fadeOut(500);
                                    setTimeout(function() {
                                        $('#' + ID[0]).remove()
                                    }, 500);
                                },1700);
                            });
                        }else{
                            Fv('main', {
                                fun: 2,
                                file: [faceid1, faceid2, faceid3],
                                check: [false, function(ID) {
                                    // Fun Callback
                                }]
                            }, function(ID) {
                                /* Callback */
                                setTimeout(function() {
                                    $('#' + ID[1]).fadeOut(500);
                                    setTimeout(function() {
                                        $('#' + ID[0]).remove()
                                    }, 500);
                                },1100);
                            });
                        }
                        $('#' + FvWillFadeOut).fadeOut(500);
                        setTimeout(function() {
                            $('#' + FvWillRemove).remove()
                        }, 500);
                    },
                    error: function () {
                        isSuccess = false;
                        Fv('main', {
                            fun: 2,
                            file: [faceid1, faceid2, faceid3],
                            check: [false, function(ID) {
                                // Fun Callback
                            }]
                        }, function(ID) {
                            /* Callback */
                            setTimeout(function() {
                                $('#' + ID[1]).fadeOut(500);
                                setTimeout(function() {
                                    $('#' + ID[0]).remove()
                                }, 500);
                            },1100);
                        });
                        $('#' + FvWillFadeOut).fadeOut(500);
                        setTimeout(function() {
                            $('#' + FvWillRemove).remove()
                        }, 500);
                    }
                })

            }else {
                //fail
                Fv('main', {
                    fun: 2,
                    file: [faceid1, faceid2, faceid3],
                    check: [false, function(ID) {
                        // Fun Callback
                    }]
                }, function(ID) {
                    /* Callback */
                    setTimeout(function() {
                        $('#' + ID[1]).fadeOut(500);
                        setTimeout(function() {
                            $('#' + ID[0]).remove()
                        }, 500);
                    },1100);
                });
                $('#' + FvWillFadeOut).fadeOut(500);
                setTimeout(function() {
                    $('#' + FvWillRemove).remove()
                }, 500);
            }
        },1500);
    });
};
function delMember(userid) {
    Fv('main', {
        fun: 1,
        file: [faceid1, faceid2, faceid3],
        check: [true, function(ID) {
            // Fun Callback
        }]
    }, function(ID) {
        /* Callback */
        let isSuccess = false;
        let FvWillFadeOut = ID[1];
        let FvWillRemove = ID[0];
        $.ajax({
            type: 'post',
            url: '../core.php',
            data: 'access=Ray&method=delMember&personID=' + userid,
            cache: false,
            dataType: 'json',
            success: function (data) {
                if (data['code'] === 2) {
                    isSuccess = true;
                    console.log(data['Info']);
                } else {
                    isSuccess = false;
                    console.warn(data['Response']['Error']['Message']);
                }
                if(isSuccess){
                    Fv('main', {
                        fun: 2,
                        file: [faceid1, faceid2, faceid3],
                        check: [true, function(ID) {
                            // Fun Callback
                        }]
                    }, function(ID) {
                        /* Callback */
                        setTimeout(function() {
                            $('#' + ID[1]).fadeOut(500);
                            setTimeout(function() {
                                $('#' + ID[0]).remove()
                            }, 500);
                        },1700);
                    });
                }else{
                    Fv('main', {
                        fun: 2,
                        file: [faceid1, faceid2, faceid3],
                        check: [false, function(ID) {
                            // Fun Callback
                        }]
                    }, function(ID) {
                        /* Callback */
                        setTimeout(function() {
                            $('#' + ID[1]).fadeOut(500);
                            setTimeout(function() {
                                $('#' + ID[0]).remove()
                            }, 500);
                        },1100);
                    });
                }
                $('#' + FvWillFadeOut).fadeOut(500);
                setTimeout(function() {
                    $('#' + FvWillRemove).remove()
                }, 500);
            },
            error: function () {
                isSuccess = false;
                Fv('main', {
                    fun: 2,
                    file: [faceid1, faceid2, faceid3],
                    check: [false, function(ID) {
                        // Fun Callback
                    }]
                }, function(ID) {
                    /* Callback */
                    setTimeout(function() {
                        $('#' + ID[1]).fadeOut(500);
                        setTimeout(function() {
                            $('#' + ID[0]).remove()
                        }, 500);
                    },1100);
                });
                $('#' + FvWillFadeOut).fadeOut(500);
                setTimeout(function() {
                    $('#' + FvWillRemove).remove()
                }, 500);
            }
        })
    });
};
function addImage(userid) {
    Fv('main', {
        fun: 1,
        file: [faceid1, faceid2, faceid3],
        check: [true, function(ID) {
            // Fun Callback
        }]
    }, function(ID) {
        /* Callback */
            let isSuccess = false;
            openREC();
            setTimeout(function(){
                let imgData = takePhoto();
                let FvWillFadeOut = ID[1];
                let FvWillRemove = ID[0];
                if(imgData !== ''){
                    $.ajax({
                        type: 'post',
                        url: '../core.php',
                        data: 'access=Ray&method=addImage&personID=' + userid + '&image=' + imgData + '&verifyLive=' + isMobile,
                        cache: false,
                        dataType: 'json',
                        success: function (data) {
                            if (data['code'] === 2) {
                                isSuccess = true;
                                console.log(data['Info']);
                            } else {
                                isSuccess = false;
                                console.warn(data['Response']['Error']['Message']);
                            }
                            if(isSuccess){
                                Fv('main', {
                                    fun: 2,
                                    file: [faceid1, faceid2, faceid3],
                                    check: [true, function(ID) {
                                        // Fun Callback
                                    }]
                                }, function(ID) {
                                    /* Callback */
                                    setTimeout(function() {
                                        $('#' + ID[1]).fadeOut(500);
                                        setTimeout(function() {
                                            $('#' + ID[0]).remove()
                                        }, 500);
                                    },1700);
                                });
                            }else{
                                Fv('main', {
                                    fun: 2,
                                    file: [faceid1, faceid2, faceid3],
                                    check: [false, function(ID) {
                                        // Fun Callback
                                    }]
                                }, function(ID) {
                                    /* Callback */
                                    setTimeout(function() {
                                        $('#' + ID[1]).fadeOut(500);
                                        setTimeout(function() {
                                            $('#' + ID[0]).remove()
                                        }, 500);
                                    },1100);
                                });
                            }
                            $('#' + FvWillFadeOut).fadeOut(500);
                            setTimeout(function() {
                                $('#' + FvWillRemove).remove()
                            }, 500);
                        },
                        error: function () {
                            isSuccess = false;
                            Fv('main', {
                                fun: 2,
                                file: [faceid1, faceid2, faceid3],
                                check: [false, function(ID) {
                                    // Fun Callback
                                }]
                            }, function(ID) {
                                /* Callback */
                                setTimeout(function() {
                                    $('#' + ID[1]).fadeOut(500);
                                    setTimeout(function() {
                                        $('#' + ID[0]).remove()
                                    }, 500);
                                },1100);
                            });
                            setTimeout(function() {
                                $('#' + FvWillRemove).remove()
                            }, 500);
                        }
                    })
                }else {
                    isSuccess = false;
                    Fv('main', {
                        fun: 2,
                        file: [faceid1, faceid2, faceid3],
                        check: [false, function(ID) {
                            // Fun Callback
                        }]
                    }, function(ID) {
                        /* Callback */
                        setTimeout(function() {
                            $('#' + ID[1]).fadeOut(500);
                            setTimeout(function() {
                                $('#' + ID[0]).remove()
                            }, 500);
                        },1100);
                    });
                    $('#' + FvWillFadeOut).fadeOut(500);
                    setTimeout(function() {
                        $('#' + FvWillRemove).remove()
                    }, 500);
                };
            },1500);
    });
};
function tryVerifyMember(userid) {
    Fv('main', {
        fun: 1,
        file: [faceid1, faceid2, faceid3],
        check: [true, function(ID) {
            // Fun Callback
        }]
    }, function(ID) {
        /* Callback */
            let isSuccess = false;
            openREC();
            setTimeout(function(){
                let imgData = takePhoto();
                let FvWillFadeOut = ID[1];
                let FvWillRemove = ID[0];
                if(imgData !== ''){
                    $.ajax({
                        type: 'post',
                        url: '../core.php',
                        data: 'access=Ray&method=verfMember&personID=' + userid + '&image=' + imgData + '&verifyLive=' + isMobile,
                        cache: false,
                        dataType: 'json',
                        success: function (data) {
                            if (data['code'] === 2) {
                                isSuccess = true;
                                console.log(data['Info']);
                            } else {
                                isSuccess = false;
                                console.warn(data['Response']['Error']['Message']);
                            }
                            if(isSuccess){
                                Fv('main', {
                                    fun: 2,
                                    file: [faceid1, faceid2, faceid3],
                                    check: [true, function(ID) {
                                        // Fun Callback
                                    }]
                                }, function(ID) {
                                    /* Callback */
                                    setTimeout(function() {
                                        $('#' + ID[1]).fadeOut(500);
                                        setTimeout(function() {
                                            $('#' + ID[0]).remove()
                                        }, 500);
                                    },1700);
                                });
                            }else{
                                Fv('main', {
                                    fun: 2,
                                    file: [faceid1, faceid2, faceid3],
                                    check: [false, function(ID) {
                                        // Fun Callback
                                    }]
                                }, function(ID) {
                                    /* Callback */
                                    setTimeout(function() {
                                        $('#' + ID[1]).fadeOut(500);
                                        setTimeout(function() {
                                            $('#' + ID[0]).remove()
                                        }, 500);
                                    },1100);
                                });
                            }
                            $('#' + FvWillFadeOut).fadeOut(500);
                            setTimeout(function() {
                                $('#' + FvWillRemove).remove()
                            }, 500);
                        },
                        error: function () {
                            isSuccess = false;
                            Fv('main', {
                                fun: 2,
                                file: [faceid1, faceid2, faceid3],
                                check: [false, function(ID) {
                                    // Fun Callback
                                }]
                            }, function(ID) {
                                /* Callback */
                                setTimeout(function() {
                                    $('#' + ID[1]).fadeOut(500);
                                    setTimeout(function() {
                                        $('#' + ID[0]).remove()
                                    }, 500);
                                },1100);
                            });
                            $('#' + FvWillFadeOut).fadeOut(500);
                            setTimeout(function() {
                                $('#' + FvWillRemove).remove()
                            }, 500);
                        }
                    })
                }else {
                    isSuccess = false;
                    Fv('main', {
                        fun: 2,
                        file: [faceid1, faceid2, faceid3],
                        check: [false, function(ID) {
                            // Fun Callback
                        }]
                    }, function(ID) {
                        /* Callback */
                        setTimeout(function() {
                            $('#' + ID[1]).fadeOut(500);
                            setTimeout(function() {
                                $('#' + ID[0]).remove()
                            }, 500);
                        },1100);
                    });
                    $('#' + FvWillFadeOut).fadeOut(500);
                    setTimeout(function() {
                        $('#' + FvWillRemove).remove()
                    }, 500);
                };
            },1500);
    });
};
getPhotoAccess(); //向用户要权限
