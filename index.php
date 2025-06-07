<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>影视APP - 畅享高清影视</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function copyToClipboard(text) {
            var tempInput = document.createElement("input");
            tempInput.value = text;
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand("copy");
            document.body.removeChild(tempInput);
            alert("已复制到剪贴板：" + text);
        }
    </script>
</head>
<body>
    <header class="hero">
        <div class="hero-content">
            <h1>影视APP</h1>
            <p>随时随地，畅享高清影视</p>
            <a href="app-download.php" class="btn-download">📥 立即下载</a>
        </div>
    </header>

    <main class="container">
        <section class="features">
            <h2>🎬 点播接口设置</h2>
            <p>安装后请按照以下步骤完成设置：</p>
            <ol>
                <li>打开 APP 并进入 <strong>“设置”</strong> 页面。</li>
                <li>找到 <strong>“点播”</strong> 选项，复制下方任意一个点播接口链接。</li>
                <li>将链接粘贴到接口位置，点击确定即可。</li>
            </ol>

            <p><strong>主点播接口：</strong>  
                <a href="javascript:void(0);" onclick="copyToClipboard('https://wencai.nyc.mn/jsm.json')" class="copy-btn">
                    📋 点击复制
                </a>
            </p>

            <p><strong>备用点播接口：</strong>  
                <a href="javascript:void(0);" onclick="copyToClipboard('http://www.饭太硬.com/tv')" class="copy-btn">
                    📋 点击复制
                </a>
            </p>
        </section>

        <section class="contact">
            <h2>📩 联系我们</h2>
            <p>如需帮助或有任何疑问，请联系技术支持团队。</p>
            <p><strong>Email：</strong> <a href="mailto:admin@wencai.nyc.mn" class="email-link">admin@wencai.nyc.mn</a></p>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 影视APP | 让世界更精彩</p>
    </footer>
</body>
</html>