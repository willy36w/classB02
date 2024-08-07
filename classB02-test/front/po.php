<div>
    目前位置 : 首頁 > 分類網誌 > <span id="navType">健康新知</span>
</div>
<div style="display: flex;align-items:start">
    <fieldset style="padding: 10px;width: 150px;">
        <legend>分類網誌</legend>
        <a class="type" data-type="1" style="display: block;margin: 5px;">健康新知</a>
        <a class="type" data-type="2" style="display: block;margin: 5px;">菸害防治</a>
        <a class="type" data-type="3" style="display: block;margin: 5px;">癌症防治</a>
        <a class="type" data-type="4" style="display: block;margin: 5px;">慢性病防治</a>
    </fieldset>
    <fieldset style="padding: 10px;width: 550px;">
        <legend id="newsTitle">文章列表</legend>
        <div id="content"></div>
    </fieldset>
</div>

<script>
    // 載入網頁時先執行一次getTitles
    getTitles(1)

    $(".type").on("click", function() {
        $("#navType").text($(this).text())
        getTitles($(this).data('type'))
    })

    function getTitles(type) {
        // 第一種傳值load
        $("#content").load("./api/get_titles.php", {
            type
        })
        // 第二種傳值get

        // $.get("./api/get_titles.php", {
        // type
        // }, (titles) => {
        //     $("#content").html(titles)
        // })
    }

    function getNews(id) {
        $("#content").load("./api/get_news.php", {
            id
        })
    }
</script>