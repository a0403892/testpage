
<style>
        * {
            margin: 0;
            padding: 0;
        }
        .album, .album-2 {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(160px, 1fr)); /* 每列最小寬度200px，自動填滿容器 */
            margin: 20px 0px;
            flex-wrap: wrap; /* 讓子元素換行 */
            gap: 30px;
            justify-content: space-around;
            text-align: center;
        }
        .album-m1, .album-m2 {
            display: none;
        }
        .album img, .album-2 img {
            width: auto; /* 圖片寬度自動 */
            max-width: 140px;
            height: 100px; 
            object-fit: cover; /* 保持圖片比例並填滿容器 */
            margin: 10px;
        }
        .album img:hover, .album-2 img:hover {
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
        .prev, .next {
            display: flex;
            justify-content: center;
            color: #fff;
            text-decoration: none;
        }
        .prevM, .nextM {
            display: none;
        }
        .album-2 {
            display: none;
        }
        @media (max-width: 1200px) {
            .album {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(120px, 1fr)); /* 每列最小寬度120px，自動填滿容器 */
                gap: 10px;
            }
            .album-2 {
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
            .album-2 img {
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
            .album, .album-2 {
                display: none;
            }
            .album-m1, .album-m2 {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(120px, 1fr)); /* 每列最小寬度120px，自動填滿容器 */
                gap: 10px;
            }
            .album-m2 {
                display: none;
            }
            .album-m1 img, .album-m2 img {
                max-width: 100px;
                height: 90px; 
                object-fit: cover; /* 保持圖片比例並填滿容器 */
                margin: 10px;
            }
            .prev, .next {
                display: none;
            }
            .prevM, .nextM {
                display: flex;
                justify-content: center;
                color: #fff;
                text-decoration: none;
            }
        }
    </style>

<body>
    <div class="album">
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/1.jpg')">
            <img src="pic/1.jpg" alt="rain01">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/2.jpg')">
            <img src="pic/2.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/3.jpg')">
            <img src="pic/3.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/4.jpg')">
            <img src="pic/4.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/5.jpg')">
            <img src="pic/5.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/6.jpg')">
            <img src="pic/6.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/7.jpg')">
            <img src="pic/7.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/8.jpg')">
            <img src="pic/8.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/9.jpg')">
            <img src="pic/9.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/10.jpg')">
            <img src="pic/10.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/11.jpg')">
            <img src="pic/11.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/12.jpg')">
            <img src="pic/12.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/13.jpg')">
            <img src="pic/13.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/14.jpg')">
            <img src="pic/14.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/15.jpg')">
            <img src="pic/15.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/16.jpg')">
            <img src="pic/16.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
    </div>
    <div class="album-2">
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/17.jpg')">
            <img src="pic/17.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/18.jpg')">
            <img src="pic/18.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/19.jpg')">
            <img src="pic/19.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/20.jpg')">
            <img src="pic/20.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
    </div>
    <!-- 手機版 -->
    <!-- 第一頁：1~12張 -->
    <div class="album-m1">
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/1.jpg')">
            <img src="pic/1.jpg" alt="rain01">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/2.jpg')">
            <img src="pic/2.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/3.jpg')">
            <img src="pic/3.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/4.jpg')">
            <img src="pic/4.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/5.jpg')">
            <img src="pic/5.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/6.jpg')">
            <img src="pic/6.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/7.jpg')">
            <img src="pic/7.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/8.jpg')">
            <img src="pic/8.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/9.jpg')">
            <img src="pic/9.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/10.jpg')">
            <img src="pic/10.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/11.jpg')">
            <img src="pic/11.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/12.jpg')">
            <img src="pic/12.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
    </div>
    <!-- 第二頁：13~20張 -->
    <div class="album-m2">
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/13.jpg')">
            <img src="pic/13.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/14.jpg')">
            <img src="pic/14.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/15.jpg')">
            <img src="pic/15.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/16.jpg')">
            <img src="pic/16.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/17.jpg')">
            <img src="pic/17.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/18.jpg')">
            <img src="pic/18.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/19.jpg')">
            <img src="pic/19.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
        <a href="#" style="text-decoration: none; color: white;" onclick="showImage('pic/20.jpg')">
            <img src="pic/20.jpg" alt="">
            <div class="imgtitle"></div>
            <p style="font-size: x-small;"></p>
        </a>
    </div>
    <a href="#" onclick="prevPage()" class="prev">上一頁</a>
    <a href="#" onclick="nextPage()" class="next">下一頁</a>
    <a href="#" onclick="prevPageM()" class="prevM">上一頁</a>
    <a href="#" onclick="nextPageM()" class="nextM">下一頁</a>
    <a href="#" onclick="getData('albumindex')" class="backto">回到相片集</a>

    <!-- 彈出視窗 -->
    <div id="albumModel" class="albumModel">
        <span class="close" onclick="hideImage()">&times;</span>
        <img class="model-content" id="modelImg">
    </div>

</div>



</body>
