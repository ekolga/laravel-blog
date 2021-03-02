@extends('layout.app')

@section('title')Edward's blog @endsection

@section('content')
    <div class="body-container">
        <div class="left-side-block">
            <div class="left-side-block__user-profile">
                <div class="left-side-block__user-photo">
                    <img id="left-side-block__profile-logo" src="{{url('/images/profile-picture.jpg')}}" alt="profile-logo">
                </div>
                <div class="left-side-block__user-name">
                    <span>Edward Kolga</span>
                </div>
                <div class="left-side-block__speciality">
                    <span>QA Automation Engineer</span>
                </div>
                <div class="left-side-block__media-buttons">
                    <a target="_blank" href="https://t.me/mastuff">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" class="left-side-block__telegram" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z"/>
                        </svg>
                    </a>
                    <a target="_blank" href="https://www.linkedin.com/in/ekolga/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" class="left-side-block__linkedin" viewBox="0 0 16 16">
                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="body-content">
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
            <div class="article">
                <div class="article__title">
                    <a href="#"><h1>Another test article</h1></a>
                </div>
                <div class="article__post-date">
                    <span>february 8th, 2021</span>
                </div>
                <div class="article__preview">
                    <article>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Sed pharetra lectus sit amet neque imperdiet, ut varius nulla rhoncus.
                        In dolor urna, pellentesque at suscipit sed, convallis ac eros. Curabitur ut lacus eget enim elementum feugiat quis ac neque.
                        Quisque volutpat condimentum lacus malesuada laoreet. In blandit ligula turpis, in lobortis velit semper vel.
                        Integer tristique, lectus class luctus efficitur, velit massa mollis eros, at ullamcorper nisl diam vitae odio.
                        Nam ultrices, erat eu aliquam laoreet, risus tellus tincclassunt mauris, a pharetra nisi urna at magna.
                        scelerisque mi eu dui faucibus euismod.
                    </article>
                </div>
                <div class="article__buttons">
                    <a class="article__like-button" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-heart" viewBox="0 0 16 16">
                            <path d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                        </svg>
                        <span class="article__like-counter">14</span>
                    </a>
                    <a class="article__comment-button" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                        <span class="article__comment-counter">8</span>
                    </a>
                    <a class="article__more-button" target="_blank" href="#">More...</a>
                </div>
            </div>
            <div class="article">
                <div class="article__title">
                    <a href="#"><h1>Another one article for testing purposes</h1></a>
                </div>
                <div class="article__post-date">
                    <span>february 3th, 2021</span>
                </div>
                <div class="article__preview">
                    <article>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Sed pharetra lectus sit amet neque imperdiet, ut varius nulla rhoncus.
                        In dolor urna, pellentesque at suscipit sed, convallis ac eros. Curabitur ut lacus eget enim elementum feugiat quis ac neque.
                        Quisque volutpat condimentum lacus malesuada laoreet. In blandit ligula turpis, in lobortis velit semper vel.
                        Integer tristique, lectus class luctus efficitur, velit massa mollis eros, at ullamcorper nisl diam vitae odio.
                        Nam ultrices, erat eu aliquam laoreet, risus tellus tincclassunt mauris, a pharetra nisi urna at magna.
                        scelerisque mi eu dui faucibus euismod.
                    </article>
                </div>
                <div class="article__buttons">
                    <a class="article__like-button" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-heart" viewBox="0 0 16 16">
                            <path d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                        </svg>
                        <span class="article__like-counter">4</span>
                    </a>
                    <a class="article__comment-button" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="black" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                        <span class="article__comment-counter">17</span>
                    </a>
                    <a class="article__more-button" target="_blank" href="#">More...</a>
                </div>
            </div>
        </div>
    </div>
@endsection
