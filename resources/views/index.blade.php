<x-template>
    <x-slot name="title"> TUFSPOT_top </x-slot>
    <x-header />
    <div class="top-wrapper">
        <div class="top-ariticle-slide">
            {{-- <div class="carousel-right">hoge</div> --}}
            {{-- <div class="carousel" data-flickity='{ "wrapAround": true, "autoPlay": 3000, "adaptiveHeight": true }'> --}}
            {{-- <div class="carousel" data-flickity='{ "wrapAround": true}'> --}}
            <div class="carousel" data-flickity='{ "wrapAround": true, "cellAlign": "left", "autoPlay": 3000}'>
                {{-- <div class="carousel" data-flickity='{ "wrapAround": true,"adaptiveHeight": true}'> --}}
                <div class="carousel-cell" style="left: 400px">
                    <div class="d-flex top-carousel-wrapper">
                        <div class="d-block top-carousel-image-wrapper">
                            <img src="{{ asset('image/アンコールワット.jpeg') }}" class="top-carousel-image" alt="...">
                        </div>
                        <div class="top-carousel-text-wrapper d-flex flex-column align-self-center">
                            <p class="top-carousel-title">
                                アンコールワットにまた行った。<br>
                                そしたら新しい発見があったはなし。
                            </p>
                            <p class="top-carousel-text">
                                テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが
                            </p>
                            <p class="top-carousel-hashtag">
                                #ハッシュタグ #ハッシュタグ
                            </p>
                            <div class="article-card-writer-wrapper">
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
                        <div class="d-block top-carousel-image-wrapper">
                            <img src="{{ asset('image/ハロン湾.jpeg') }}" class="top-carousel-image" alt="...">
                        </div>
                        <div class="top-carousel-text-wrapper d-flex flex-column align-self-center">
                            <p class="top-carousel-title">
                                ハロン湾にまた行った。<br>
                                そしたら新しい発見があったはなし。
                            </p>
                            <p class="top-carousel-text">
                                テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが
                            </p>
                            <p class="top-carousel-hashtag">
                                #ハッシュタグ #ハッシュタグ
                            </p>
                            <div class="article-card-writer-wrapper">
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
                        <div class="d-block top-carousel-image-wrapper">
                            <img src="{{ asset('image/スイティエン.jpeg') }}" class="top-carousel-image" alt="...">
                        </div>
                        <div class="top-carousel-text-wrapper d-flex flex-column align-self-center">
                            <p class="top-carousel-title">
                                スイティエンにまた行った。<br>
                                そしたら新しい発見があったはなし。
                            </p>
                            <p class="top-carousel-text">
                                テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが
                            </p>
                            <p class="top-carousel-hashtag">
                                #ハッシュタグ #ハッシュタグ
                            </p>
                            <div class="article-card-writer-wrapper">
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
        </div>
    </div>
    {{-- Pick Up --}}
    <x-top_slider title="Pick Up" text="注目記事" />
    {{-- Academia --}}
    <x-top_feature title="Academia" />
    <x-top_feature title="Buisiness and Carreer" />
    <x-top_feature title="Culture and Essay" />
    {{-- Feature --}}
    <x-top_slider title="Feature" text="特集" type="feature" />

    <div class="top_links_wrapper d-flex justify-content-center ">
        <div class="top_links d-flex align-items-center justify-content-center">
            <a href="#" class="text-decoration-none link-light">東京外語会</a>
        </div>
        <div class="top_links d-flex align-items-center justify-content-center">
            <a href="#" class="text-decoration-none link-light">TUFS Community</a>
        </div>
        <div class="top_links d-flex align-items-center justify-content-center">
            <a href="#" class="text-decoration-none link-light">東京外語会</a>
        </div>
        <div class="top_links d-flex align-items-center justify-content-center">
            <a href="#" class="text-decoration-none link-light">TUFS Community</a>
        </div>
    </div>
    <x-main>
    </x-main>
    <x-footer />
</x-template>
