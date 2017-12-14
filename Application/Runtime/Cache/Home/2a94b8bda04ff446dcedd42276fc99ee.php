<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>WebUploader演示</title>
    <link rel="stylesheet" type="text/css" href="/006/Public/Home/webuploader-0.1.5/css/webuploader.css" />
    <link rel="stylesheet" type="text/css" href="/006/Public/Home/webuploader-0.1.5/css/style.css" />
    <!--引入JS-->
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js" ></script>
    <script type="text/javascript" src="/006/Public/Home/webuploader-0.1.5/dist/webuploader.js"></script>
    <script type="text/javascript" src="/006/Public/Home/webuploader-0.1.5/dist/upload.js"></script>
</head>
<body>


        <!--头部，相册选择和格式选择-->
        <form action="<?php echo U('Home/Index/webuploader');?>" method="post">

        <div id="uploader">
            <div class="queueList">
                <div id="dndArea" class="placeholder">
                    <div id="filePicker"></div>
                    <p>或将照片拖到这里，单次最多可选300张</p>
                </div>
            </div>
            <div class="statusBar" style="display:none;">
                <div class="progress">
                    <span class="text">0%</span>
                    <span class="percentage"></span>
                </div><div class="info"></div>
                <div class="btns">
                    <div id="filePicker2"></div><div class="uploadBtn">开始上传</div>
                </div>
            </div>
        </div>
            <input type="submit" value="提交">
        </form>



</body>
</html>