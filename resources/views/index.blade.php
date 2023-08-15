<x-template>
    <x-slot name="title"> TUFSPOT_top </x-slot>
    <x-header />
    <div class="top-wrapper">
        <div class="top-ariticle-slide">
            {{-- <div class="carousel" data-flickity='{ "wrapAround": true, "autoPlay": 3000, "adaptiveHeight": true }'> --}}
            <div class="carousel" data-flickity='{ "wrapAround": true,"adaptiveHeight": true, "cellAlign": "left"}'>
                {{-- <div class="carousel" data-flickity='{ "wrapAround": true,"adaptiveHeight": true}'> --}}
                <div class="carousel-cell">
                    <div class="d-flex top-carousel-wrapper">
                        <img src="{{ asset('storage/images/アンコールワット.jpeg') }}" class="d-block top-carousel-image" alt="...">
                        <div class="top-carousel-text-wrapper d-flex flex-column justify-content-center">
                            <p class="top-carousel-title">
                                アンコールワットにまた行った。<br>
                                そしたら新しい発見があったはなし。
                            </p>
                            <p class="top-carousel-text">
                                テキストが入りますテキストが入りますテキストが<br>
                                入りますテキストが入りますテキストが入ります<br>
                                テキストが入りますテキストが入りますテキストが<br>
                                テキストが入りますテキストが入ります<br>
                                テキストが入りますテキストが入ります<br>
                                テキストが入りますテキストが入りますテキストが<br>
                                テキストが入りますテキストが入ります入りますテ
                            </p>
                            <p class="top-carousel-hashtag">
                                #ハッシュタグ #ハッシュタグ
                            </p>
                            <div>
                                <svg class="d-inline text-secondary" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                </svg>
                                <p class="article-card-writer">
                                    Writer Name
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-cell carousel-cell--height2">
                    <div class="d-flex top-carousel-wrapper">
                        <img src="{{ asset('storage/images/ハロン湾.jpeg') }}" class="d-block top-carousel-image" alt="...">
                        <div class="top-carousel-text-wrapper d-flex flex-column justify-content-center">
                            <p class="top-carousel-title">
                                ハロン湾にまた行った。<br>
                                そしたら新しい発見があったはなし。
                            </p>
                            <p class="top-carousel-text">
                                テキストが入りますテキストが入りますテキストが<br>
                                入りますテキストが入りますテキストが入ります<br>
                                テキストが入りますテキストが入りますテキストが<br>
                                テキストが入りますテキストが入ります<br>
                                テキストが入りますテキストが入ります<br>
                                テキストが入りますテキストが入りますテキストが<br>
                                テキストが入りますテキストが入ります入りますテ
                            </p>
                            <p class="top-carousel-hashtag">
                                #ハッシュタグ #ハッシュタグ
                            </p>
                            <div>
                                <svg class="d-inline text-secondary" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                </svg>
                                <p class="article-card-writer">
                                    Writer Name
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-cell carousel-cell--height3">
                    <div class="d-flex top-carousel-wrapper">
                        <img src="{{ asset('storage/images/スイティエン.jpeg') }}" class="d-block top-carousel-image" alt="...">
                        <div class="top-carousel-text-wrapper d-flex flex-column justify-content-center">
                            <p class="top-carousel-title">
                                スイティエンにまた行った。<br>
                                そしたら新しい発見があったはなし。
                            </p>
                            <p class="top-carousel-text">
                                テキストが入りますテキストが入りますテキストが<br>
                                入りますテキストが入りますテキストが入ります<br>
                                テキストが入りますテキストが入りますテキストが<br>
                                テキストが入りますテキストが入ります<br>
                                テキストが入りますテキストが入ります<br>
                                テキストが入りますテキストが入りますテキストが<br>
                                テキストが入りますテキストが入ります入りますテ
                            </p>
                            <p class="top-carousel-hashtag">
                                #ハッシュタグ #ハッシュタグ
                            </p>
                            <div>
                                <svg class="d-inline text-secondary" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                </svg>
                                <p class="article-card-writer">
                                    Writer Name
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true, "adaptiveHeight": true}'> --}}
            {{-- <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true, "autoPlay": 3000 }'> --}}
            {{-- <div class="gallery-cell">
                    <div class="d-flex">
                        <img src="{{ asset('storage/images/アンコールワット.jpeg') }}" class="d-block top-carousel-image" alt="...">
                        <div class="top-carousel-text">
                            <p>アンコールワットにまた行った。<br>
                                そしたら新しい発見があったはなし。
                            </p>
                            <p>
                                テキストが入りますテキストが入りますテキストが<br>
                                入りますテキストが入りますテキストが入ります<br>
                                テキストが入りますテキストが入りますテキストが<br>
                                テキストが入りますテキストが入ります<br>
                                テキストが入りますテキストが入ります<br>
                                テキストが入りますテキストが入りますテキストが<br>
                                テキストが入りますテキストが入ります入りますテ
                            </p>
                            <p>#ハッシュタグ #ハッシュタグ</p>
                            <div>
                                <svg class="d-inline text-secondary" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                </svg>
                                <p class="article-card-writer">
                                    Writer Name
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="gallery-cell"></div>
                <div class="gallery-cell"></div>
                <div class="gallery-cell"></div>
                <div class="gallery-cell"></div>
            </div> --}}

            {{-- 
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex">
                            <img src="{{ asset('storage/images/アンコールワット.jpeg') }}" class="d-block top-carousel-image" alt="...">
                            <div class="top-carousel-text">
                                <p>アンコールワットにまた行った。<br>
                                    そしたら新しい発見があったはなし。
                                </p>
                                <p>
                                    テキストが入りますテキストが入りますテキストが<br>
                                    入りますテキストが入りますテキストが入ります<br>
                                    テキストが入りますテキストが入りますテキストが<br>
                                    テキストが入りますテキストが入ります<br>
                                    テキストが入りますテキストが入ります<br>
                                    テキストが入りますテキストが入りますテキストが<br>
                                    テキストが入りますテキストが入ります入りますテ
                                </p>
                                <p>#ハッシュタグ #ハッシュタグ</p>
                                <div>
                                    <svg class="d-inline text-secondary" xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                    </svg>
                                    <p class="article-card-writer">
                                        Writer Name
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('storage/images/ハロン湾.jpeg') }}" class="d-block top-carousel-image" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('storage/images/スイティエン.jpeg') }}" class="d-block top-carousel-image" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" style="color: #414141" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                    </svg>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" style="color: #414141" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                    <span class="visually-hidden">Next</span>
                </button>
            </div> --}}
        </div>
    </div>
    <x-main>
    </x-main>
    <x-footer />
</x-template>
