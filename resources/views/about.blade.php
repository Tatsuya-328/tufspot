<x-template>
    <x-slot name="title"> TUFSPOT_about </x-slot>
    {{-- タイトル位置はcomponentsで呼び出したい. --}}
    <x-header />
    <x-bread />
    <div class="about-top-wrapper d-flex justify-content-between">
        <div class="about-image mt-auto">
            <img src="{{ asset('storage/images/TUFSPOT_about_earth.png') }}" style="width:440px; height:530px;" class="" alt="...">
        </div>
        <div class="about-top">
            <p class="about-top-title">
                <span>TUFSPOT</span><br>
                ー 世界に散らばる「外大知」を集める ー
            </p>
            <p class="about-top-text">
                TUFSPOTは、世界中の外大同窓生の知見を集め、発信する<br>
                東京外語会の会員のみがアクセスすることのできるメディアです。<br>
                <br>
                世界中で多様な活動を展開する東京外大の同窓生たち。群れることなく我が道を<br>
                行く人が多く、仲の良い友人でさえ何をやっているのかわからない。<br>
                みんながバラバラでありながら、しかし会ってみれば、根底に流れる共通項に<br>
                思い至る。<br>
                <br>
                世界中に散らばる外大同窓生の知見が集まれば、より面白い世界に<br>
                出会えるのではないか。そんな考えから生まれたのがこのメディアです。<br>
                <br>
                ここでは、東京外大の同窓生による「世界各国のビジネス情報」<br>
                「外大生の視点から世界を切り取るエッセイ」<br>
                「東京外大が連綿と紡ぎあげてきたアカデミア情報」など、<br>
                外大同窓生ならではの情報を得ることができます。<br>
                <br>
                外大生だからこそ知っている情報・視点・知識を持つことで、<br>
                自らの生活や仕事に生かしていく。この場を通して、外大同窓生がより面白い<br>
                世界の歩み方を知り、思いもよらなかった未来につながることを目指しています。<br>
            </p>
        </div>
    </div>
    <x-main>
        <div class="about-wrapper d-flex flex-column align-items-center">
            <div class="about-concept">
                <div class="about-concept-title d-flex justify-content-center align-items-center">
                    メディアコンセプト
                </div>
                <div class="about-concept-text d-flex justify-content-center align-items-center">
                    Enjoy Diversity
                </div>
            </div>
            <p class="about-theme-top-text">
                ［　主に取り扱う3つのテーマ　］
            </p>
            <div class="about-theme-wrapper d-flex">
                <div class="about-theme d-flex flex-column align-items-center">
                    <p class="about-theme-title"><span>A</span>cademia</p>
                    <img src="{{ asset('storage/images/about_academia.svg') }}" class="about-theme-image" alt="...">
                    <p class="about-theme-text">
                        東京外大が紡いでいるアカデミアの<br>
                        知見をシェアすることで、<br>
                        新たな知見を得ることができます。
                    </p>
                </div>
                <div class="about-theme d-flex flex-column align-items-center">
                    <p class="about-theme-title"><span>B</span>usiness</p>
                    <img src="{{ asset('storage/images/about_business.svg') }}" class="about-theme-image" alt="...">
                    <p class="about-theme-text">
                        経済や各ビジネス分野の<br>
                        グローバルな知見や、キャリアの<br>
                        知見をシェアすることで、<br>
                        外大生の自己実現を応援します。
                    </p>
                </div>
                <div class="about-theme d-flex flex-column align-items-center">
                    <p class="about-theme-title"><span>C</span>ulture</p>
                    <img src="{{ asset('storage/images/about_culture.svg') }}" class="about-theme-image" alt="...">
                    <p class="about-theme-text">
                        カルチャー分野の知見や、<br>
                        各国で過ごす同窓生のエッセイを<br>
                        シェアすることで、新たな視点を<br>
                        得ることができます。
                    </p>
                </div>
            </div>
            <div class="about-concept">
                <div class="about-concept-title d-flex justify-content-center align-items-center">
                    TUFSPOTとは
                </div>
                <div class="about-concept-spot-detail d-flex flex-column align-itemsn-center justify-content-center align-items-center">
                    <div class="about-concept-spot about-concept-spot-first d-flex flex-column justify-content-center align-items-center">
                        <p class="about-concept-spot-title">［　世界中の外大知を集める　］</p>
                        <p class="about-concept-spot-headline">TUFS-<span>POT</span></p>
                        <div class="about-concept-spot-text-wrapper d-flex align-items-end justify-content-between">
                            <p class="about-concept-spot-text">
                                世界中にバラバラに散らばっている外大生たちの知見を、<br>
                                この場に集めることがまず一つのこのメディアの価値であると<br>
                                考えています。<br>
                                バラバラであることをそのままに。ただ、一つの場に集い、<br>
                                お互いの存在を確かめ合う。<br>
                                そこから新たな知見が生まれることを願って。
                            </p>
                            <img src="{{ asset('storage/images/about_pot.svg') }}" class="about-concept-spot-image" alt="">
                        </div>
                    </div>
                    <div class="about-concept-spot d-flex flex-column justify-content-center align-items-center">
                        <p class="about-concept-spot-title">［　外大生の知見にスポットを当てる　］</p>
                        <p class="about-concept-spot-headline">TUF-<span>SPOT</span></p>
                        <div class="about-concept-spot-text-wrapper d-flex align-items-end justify-content-between">
                            <p class="about-concept-spot-text">
                                集った知見の中にある光るものにスポットライトを当て、<br>
                                多くの同窓生へ伝えていく。それがメディアとしての役割<br>
                                であり、そのスポットが次のスポットライトへのきっかけ<br>
                                となる。そんな連鎖を生む一つのきっかけになれればと<br>
                                考えています。
                            </p>
                            <img src="{{ asset('storage/images/about_spot.svg') }}" class="about-concept-spot-image" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-main>
    <x-footer />
</x-template>
