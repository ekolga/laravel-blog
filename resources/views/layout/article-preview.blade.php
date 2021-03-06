@section('article-preview')
<div class="article">
    <div class="article__title">
        <a href="#"><h1>Test article</h1></a>
    </div>
    <div class="article__post-date">
        <span>february 14th, 2021</span>
    </div>
    <div class="article__preview">
        <article>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Sed pharetra lectus sit amet neque imperdiet, ut varius nulla rhoncus.
            In dolor urna, pellentesque at suscipit sed, convallis ac eros. Curabitur ut lacus eget enim elementum feugiat quis ac neque.
            Quisque volutpat condimentum lacus malesuada laoreet. In blandit ligula turpis, in lobortis velit semper vel.
            Integer tristique, lectus id luctus efficitur, velit massa mollis eros, at ullamcorper nisl diam vitae odio.
            Nam ultrices, erat eu aliquam laoreet, risus tellus tincidunt mauris, a pharetra nisi urna at magna.
            scelerisque mi eu dui faucibus euismod.
        </article>
    </div>
    <div class="article__buttons">
        <a class="article__like-button" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-heart" viewBox="0 0 16 16">
                <path d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
            </svg>
            <span class="article__like-counter">7</span>
        </a>
        <a class="article__comment-button" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
            </svg>
            <span class="article__comment-counter">1</span>
        </a>
        <a class="article__more-button" target="_blank" href="#">More...</a>
    </div>
</div>
