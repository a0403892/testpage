<style>
    body {
        text-align: center;
        color: #fff;
    }
    .blogpage a {
        justify-content: end;
        text-decoration: none;
        color: #fff;
    }
    .container {
        margin: 20px;
    }
    .blog01, .blog02, .blog03 {
        padding: 15px;
        border: 1px solid #aaa;
        position: relative;
        margin-bottom: 20px;
        background-color: rgb(104, 104, 104);
    }

    .article01, .article02, .article03 {
        margin-top: 10px;
    }
    .read01, .read02, .read03 {
        margin-top: 30px;
    }
    .blogindex {
        margin-top: 30px;
        margin-bottom: 10px;
    }
    .read01 img, .read02 img, .read03 img {
        width: 180px;
        top: 5px;
        left: 5px;
        position: absolute;
        float: left;
    }

    .blog01::before, .blog01::after, .blog02::before, .blog02::after, .blog03::before, .blog03::after {
        content: '';
        position: absolute;
        left: -5px;
        top: -5px;
        background: linear-gradient(
            45deg, 
            #e6fb04, #ff7300, #6e0dd0, #00ff66,
            #ff0099, #002bff, #ff00c8, #ea0c04, 
            #ab00fd, #aafb14, #aaa00f
        );
        background-size: 300%;
        width: calc(100% + 10px);
        height: calc(100% + 10px);
        z-index: -1;
        animation: neonanimate 20s linear infinite;
        display: none;
    }
    .blog01:hover::before, .blog01:hover::after, .blog02:hover::before, .blog02:hover::after, .blog03:hover::before, .blog03:hover::after {
        display: block;
    }

    @keyframes neonanimate {
        0% {
            background-position: 0 0;
        }
        50% {
            background-position: 400% 0;
        }
        100% {
            background-position: 0 0;
        }
    }
    @media (max-width: 1200px) {
        .blog01, .blog02, .blog03 {
            padding: 15px;
            border: 1px solid #aaa;
            position: relative;
            margin-bottom: 20px;
            background-color: rgb(104, 104, 104);
            font-size: 12px;
        }
        .article01, .article02, .article03 {
            margin-top: 10px;
        }
        .read01, .read02, .read03 {
            margin-top: 30px;
        }
        .blogindex {
            margin-top: 30px;
            margin-bottom: 10px;
        }
        .blogpage a {
            font-size: 60%;
        }
        .read01 img, .read02 img, .read03 img {
            width: 140px;
            top: 6px;
            left: 6px;
        }
    }
    @media (max-width: 500px) {
        .container {
            padding: 20px;
            margin: 0;
        }
    }
</style>

<div class="container">

    <div class="blog01">
        <h1>膽小鬼</h1>
        <div class="read01">
            <img src="pic/blog/01.jpg" alt="">
            <a href="#" onclick="getArticle('article01')">閱讀內容</a>
        </div>
        <div class="article01" id="article01">

        </div>
    </div>

    <div class="blog02">
        <h1>風箏</h1>
        <div class="read02">
            <img src="pic/blog/02.jpg" alt="">
            <a href="#" onclick="getArticle('article02')">閱讀內容</a>
        </div>
        <div class="article02" id="article02">
            
        </div>
    </div>

    <div class="blog03">
        <h1>想飛</h1>
        <div class="read03">
            <img src="pic/blog/03.jpg" alt="">
            <a href="#" onclick="getArticle('article03')">閱讀內容</a>
        </div>
        <div class="article03" id="article03">
            
        </div>
    </div>

    <div class="blogpage">
        <a href="#" onclick="getData('blogindexpage2')">下一頁</a>  
    </div>

</div>