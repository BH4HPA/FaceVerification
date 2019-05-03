<!DOCTYPE html>
<html>
  <!--
 _     _____ _ _ ____               _      |    _____           __     __         
 | |   |  ___/ / |___ \   _ __   ___| |_   |   |  __ \        /\\ \   / /         
 | |   | |_  | | | __) | | '_ \ / _ \ __|  |   | |__) |_____ /  \\ \_/ /___ _ __  
 | |___|  _| | | |/ __/ _| | | |  __/ |_   |   |  _  /______/ /\ \\   // __| '_ \ 
 |_____|_|   |_|_|_____(_)_| |_|\___|\__|  |   | | \ \     / ____ \| || (__| | | |
                                           |   |_|  \_\   /_/    \_\_(_)___|_| |_|
                                    
 Html Name:         Exception | Ray API
 Description：      在调用指定API时出现异常
 Last Change：      201811240912
 Server:            MainWeb (ssh.s.r-ay.cn)
 Server Location:   腾讯云上海二区数据中心
 Server IP:         182.254.244.156
 Be Authorized：    Ray
 Be Authorized URI：https://r-ay.cn
 Be Authorized QQ:  2549279658
 Author：           LF112
 Author QQ:         2275203821
 Author Email:      lf@lf112.net
  -->   
    <head>
        <?php
            $rootPath = $e->getFile();
            $rootPath = explode("/", $rootPath);
            unset($rootPath[0]);
            unset($rootPath[1]);
            unset($rootPath[2]);
            $rootPath = "/". implode("/", $rootPath);

            $stackTrace = $e->getTrace();
            foreach($stackTrace as $key=>$obj){
                $obj["file"] = explode("/", $obj["file"]);
                unset($obj["file"][0]);
                unset($obj["file"][1]);
                unset($obj["file"][2]);
                $obj["file"] = "/". implode("/", $obj["file"]);
                $stackTrace[$key]["file"] = $obj["file"];
            }
        ?>
        <title>Exception | Ray API</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta itemprop="image" content="https://r-ay.cn/favicon.ico">
        <script>
          console.log("\n8888888b.                           d88888888888b.8888888 \n888   Y88b                         d88888888   Y88b 888   \n888    888                        d88P888888    888 888   \n888   d88P 8888b. 888  888       d88P 888888   d88P 888   \n8888888P'     '88b888  888      d88P  8888888888P'  888   \n888 T88b  .d888888888  888     d88P   888888        888   \n888  T88b 888  888Y88b 888    d8888888888888        888   \n888   T88b'Y888888 'Y88888   d88P     888888      8888888 \n                       888                                \n                  Y8b d88P                                \n                   'Y88P'                                 \n\n 感谢@AlloyTeam. 作者QQ %c 2549279658 \n", "color:red");
          console.log("%c Ray API %c Copyright \xa9 2014-%s\n%c"+"温馨提示：请不要调皮地在此粘贴执行任何内容，这可能会给您带来损失 ！^_^"+"\n %c"+"作者QQ 2549279658. 感谢 @Alipay.com"+"\n ",'font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;font-size:64px;color:#00bbee;-webkit-text-fill-color:#00bbee;-webkit-text-stroke: 1px #00bbee;',"font-size:12px;color:#999999;",(new Date).getFullYear(),"color:#333;font-size:16px;","font-size:12px;"); 
        </script>
        <style>
        body{display:flex;margin:0;padding:0;height:100%;min-height:100vh;background-image:url(https://api.lia.lfio.net/?t=Lia&&m=Src&&n=BGShadow&&s=png),linear-gradient(315deg,#0e161b,#223642);background-size:cover;align-items:center;justify-content:center}
        main{position:relative;width:95%;max-width:1000px}
        .LF_Main{display:inline-block;box-sizing:border-box;padding:0 15px;width:100%;min-width:36em;min-height:50px;border:0;border-radius:2px;background:hsla(203,11%,28%,.43);color:#e6e6e6;text-decoration:none;font-size:25px;line-height:50px;-webkit-box-flex:1;flex-grow:1}
        table{display:table;overflow-x:auto;margin:1em 1em;padding:0;width:100%;border-collapse:collapse;border-radius:4px;border-spacing:0}
        table th{padding:.4em .8em;border:1px solid #2e3c46;background-color:#2a3640;color:#fff;text-align:left;font-weight:lighter!important;font-size:15px;line-height:1.5em}
        table td{padding:.4em .8em;border:1px solid #ddd;font-weight:lighter!important;font-size:15px;line-height:1.5em}
        table tr{background-color:#f8f8f8}
        table tr:nth-child(2n){background-color:#e4e4e4}
        table td code{background-color:#efefef}
        code{display:inline-block;margin:3px 2px;padding:3px 5px;border-radius:2px;background:hsla(203,9%,34%,.43);color:#dde1e4;white-space:nowrap;font-weight:lighter!important;font-size:14px;font-family:Roboto,Helvetica,Arial,sans-serif}
        ::selection{background:rgba(212,221,228,.44);text-shadow:none}
        .subtitle{margin:0 0 10px 0;padding-bottom:6px;box-shadow:0 1px 0 0 #5c666f;color:#fff;font-weight:lighter!important}
        .span-text,pre,span{margin:0 0 0 10px;color:#e8e8e8;white-space:pre-wrap;letter-spacing:0;font-size:13px;opacity:.87;word-break:break-all}
        @media screen and (max-width:1000px){.LF_Main{overflow-x:auto;padding:0;padding-left:0;min-width:unset}
        .LF_Main>table{margin:0}
        }
        a,a:hover{color:#e8e8e8;text-decoration:none}
        a:link,a:visited{color:#949494}
        a:hover{color:#b9b9b9}
        </style>
    </head>
    
    <body>
        <main>
            <h1 style="font-size: 2.2rem;text-align: center;color: #fff;margin: 15px;font-weight: lighter!important;">在调用指定API时出现异常</h1>
            <h3 class="subtitle"><?php echo get_class($e) ?></h3>

            <code>错误位置 ></code><span class="span-text"> <?php echo $rootPath ?> 第<?php echo $e->getLine() ?>行</span>
            <br>
            <code>异常信息 ></code><span class="span-text"> <?php echo $e->getMessage() ?></span>

            <h3 class="subtitle">客户端信息</h3>
            <code>Post ></code><span class="span-text"><?php echo json_encode($_POST) ?></span>
            <br>
            <code>Cookies ></code><span class="span-text"><?php echo json_encode($_COOKIE) ?></span>

            <h3 class="subtitle">Stack Trace</h3>
            <div class="LF_Main">
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>File</th>
                            <th>Line</th>
                            <th>Function</th>
                            <th>Class</th>
                            <th>Args</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($stackTrace as $key=>$obj){?>
                        <tr>
                            <th><?php echo $key;?></th>
                            <th><?php echo $obj["file"];?></th>
                            <th><?php echo $obj["line"];?></th>
                            <th><?php echo $obj["function"];?></th>
                            <th><?php echo $obj["class"];?></th>
                            <th><?php echo json_encode($obj["args"]);?></th>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <h3 class="subtitle">帮助</h3>
            <span>请刷新页面,如果仍存在错误,请联系<a href="mailto:i@r-ay.cn">i@r-ay.cn</a></span>

            <?php if(isset($_GET['_debug'])){ ?>
                <h3 class="subtitle" style="color:red">神秘领域</h3>
                <code>Get ></code><span class="span-text"><?php echo json_encode($_GET) ?></span>
                <br>
                <code>Source > </code><pre><?php print_r($e) ?> </pre>
            <?php } ?>

            <div style="width: 100%;text-align: center;margin-top: 15px;">
                <code style="background: hsla(203, 10%, 26%, 0.43);padding: 5px 10px;">
                    <?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
                </code>
            </div>
                
        </main>
    </body>
</html>