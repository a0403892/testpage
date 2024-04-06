
<style>
        * {
            margin: 0;
            padding: 0;
        }
        .album {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(160px, 1fr)); /* 每列最小寬度200px，自動填滿容器 */
            margin: 20px 0px;
            flex-wrap: wrap; /* 讓子元素換行 */
            gap: 30px;
            justify-content: space-around;
            text-align: center;
        }

        .album img {
            width: auto; /* 圖片寬度自動 */
            max-width: 140px;
            height: 100px; 
            object-fit: cover; /* 保持圖片比例並填滿容器 */
            margin: 10px;
        }
        .album img:hover {
            transform: scale(1.3);
            border-radius: 5px;
        }
        /* 隱藏彈出視窗 */
        .albumModel {
            display: none;
            position: fixed;
            z-index: 9999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.7);
        }
        /* 調整圖片大小 */
        .model-content {
            margin: 50px auto;
            display: block;
            width: 30%;
            min-width: 600px;
        }
        /* 隱藏關閉按鈕 */
        .close {
            color: #fff;
            position: absolute;
            top: 10px;
            right: 25px;
            font-size: 30px;
            font-weight: bold;
            transition: 0.3s;
            width: 40px;
            height: 1.5em;
        }
        .close:hover,
        .close:focus {
            color: #999;
            text-decoration: none;
            cursor: pointer;
        }
        .backto {
            display: flex;
            justify-content: center;
            color: #fff;
            text-decoration: none;
        }
        @media (max-width: 1200px) {
            .album {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(120px, 1fr)); /* 每列最小寬度120px，自動填滿容器 */
                gap: 10px;
            }
            .album img {
                max-width: 100px;
                height: 90px; 
                object-fit: cover; /* 保持圖片比例並填滿容器 */
                margin: 10px;
            }
            body a {
                font-size:12px;
            }
        }
        @media (max-width: 500px) {
            .model-content {
                margin: 10px auto;
                display: block;
                width: 20%;
                min-width: 300px;
                margin-top: 50px;
            }
        }
    </style>

<body>
    <div class="album">
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/i01.jpg')">
            <img src="pic/i01.jpg" alt="rain01">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/i02.jpg')">
            <img src="pic/i02.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/i03.jpg')">
            <img src="pic/i03.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/i04.jpg')">
            <img src="pic/i04.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/i05.jpg')">
            <img src="pic/i05.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/i06.jpg')">
            <img src="pic/i06.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/i07.jpg')">
            <img src="pic/i07.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/i08.jpg')">
            <img src="pic/i08.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/i09.jpg')">
            <img src="pic/i09.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>

    </div>
    <a href="#" onclick="getData('albumindex')" class="backto">回到相片集</a>

    <!-- 彈出視窗 -->
    <div id="albumModel" class="albumModel">
        <span class="close" onclick="hideImage()">&times;</span>
        <img class="model-content" id="modelImg">
    </div>

</div>

</body>
