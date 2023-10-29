<section id="loading" class="loading">
    <!-- <iframe style="display: none;" width="560" height="315" src="https://www.youtube.com/embed/YQRHrco73g4?si=WSNuBDrIBA6UJTjC" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
    <div class="container">
        <div class="item"></div>
        <div class="item"></div>
        <div class="item">
            <div class="sub-item"></div>
            <div class="sub-item"></div>
        </div>
    </div>
</section>

<style>
    /* loading */

    section {
        background: #f5f5f7f7;
    }

    .loading {
        width: 100%;
        position: fixed;
        left: 0;
        top: -1rem;
        z-index: 4;
        background: #f5f5f7f7;
    }

    .loading.hide {
        display: none;
    }

    #loading .container {
        height: 100vh;
        border-radius: 0;
        margin: 0 auto;
        margin-top: 4rem;
        padding: 1rem;
        display: flex;
        flex-direction: column;
        gap: 1rem;
        max-width: 800px;
    }

    #loading .container .item {
        width: 100%;
        height: 100px;
        background: #fff;
        border-radius: 16px;
        animation: wide 2s infinite;
    }

    #loading .container .item:nth-child(2) {
        height: 40px;
    }

    #loading .container .item:nth-child(3) {
        height: 40px;
    }

    @keyframes wide {
        0% {
            background: #ccc;
        }

        60% {
            background: #ddd;
        }

        100% {
            background: #ccc;
        }
    }
</style>