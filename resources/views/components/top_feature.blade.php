@props(['title' => 'Academia'])
<div class="top_feature_wrapper">
    <div class="top_pickup_title_wrapper">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
        </svg>
        <div class="top_pickup_title">
            {{ $title }}
        </div>
        <div class="top_feature_title_text"></div>
    </div>
    <div class="container">
        <div class="d-flex justify-content-center flex-wrap">
            {{-- <div class="row row-cols-3"> --}}
            <x-article_card />
            <x-article_card_sui />
            <x-article_card_an />
            {{-- 最終行も左寄せには、空要素入れるしかなさそう https://qiita.com/QUANON/items/e14949abab3711ca8646 --}}
            <x-article_card />
            <x-article_card_sui />
            <x-article_card_an />
        </div>
    </div>
</div>
