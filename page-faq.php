<?php get_header(); ?>

<section id="faq" class="faq">
    <div class=" sub-mv sub-mv-faq">
        <div class="sub-inner sub-inner-mv">
            <div class="sub-mv-box">
                <h2 class="sub-mv-title">FAQ</h2>
                <h3 class="sub-mv-item sub-mv-item-faq">よくある質問</h3>
                <p class="sub-mv-part">皆様からよく頂くご質問にお答えします。</p>
            </div>
        </div>
    </div>
</section>
<div class="is-small">
    <ol class="breadcrumbs">
        <?php if (function_exists('bcn_display')) bcn_display_list(); ?>
    </ol>
</div>
<section id="faq-btn">
    <div class="sub-inner">
        <div class="details-btn-box faq-btn-box">
            <a class="details-btn" href="#faq-details">応募・選考について</a>
            <a class="details-btn" href="#faq-career">キャリアについて</a>
            <a class="details-btn" href="#faq-benefits">福利厚生について</a>
        </div>
    </div>
</section>
<section id=faq-details>
    <div class="sub-inner sub-inner-faq">
        <h2 class="sub-title faq-main-title">応募・選考について</h2>
        <div class="accordion">
            <div class="accordion-item">
                <div class="accordion-title jsAccordionTitle"><span>応募資格はありますか？</span></div>
                <div class="accordion-content">人の役に立つことを考えたり行動したりすることが好きな方</div>
            </div>
            <div class="accordion-item">
                <div class="accordion-title jsAccordionTitle"><span>応募方法は？</span></div>
                <div class="accordion-content">弊社採用サイトからエントリーしてください。</div>
            </div>
            <div class="accordion-item">
                <div class="accordion-title jsAccordionTitle"><span>選考フローは？</span></div>
                <div class="accordion-content">書類選考ののち数回の面接を予定しております。</div>
            </div>
            <div class="accordion-item">
                <div class="accordion-title jsAccordionTitle"><span>選考にかかる時間は？</span>
                </div>
                <div class="accordion-content">1週間ほどお時間を頂いております</div>
            </div>
            <div class="accordion-item">
                <div class="accordion-title jsAccordionTitle"><span>面接では何を聞かれますか？</span></div>
                <div class="accordion-content">志望動機などお聞かせいただきます</div>
            </div>
            <div class="accordion-item">
                <div class="accordion-title jsAccordionTitle"><span>面接官はどんな人ですか？</span>
                </div>
                <div class="accordion-content">弊社社員にて行います</div>
            </div>
        </div>
    </div>
</section>
<section id="faq-career">
    <div class="sub-inner  sub-inner-faq">
        <h2 class="sub-title faq-main-title2">キャリアについて</h2>
        <div class="accordion">
            <div class="accordion-item">
                <div class="accordion-title jsAccordionTitle"><span>自分の希望するキャリアパスに進むことはできますか？</span></div>
                <div class="accordion-content">個人の能力を考慮いたします。</div>
            </div>
            <div class="accordion-item">
                <div class="accordion-title jsAccordionTitle"><span>転勤はありますか？</span></div>
                <div class="accordion-content">業務の必要に応じて、転勤が発生する場合があります。</div>
            </div>
            <div class="accordion-item">
                <div class="accordion-title jsAccordionTitle"><span>転勤の希望は出せますか？</span></div>
                <div class="accordion-content">可能です。ご相談ください。</div>
            </div>
            <div class="accordion-item">
                <div class="accordion-title jsAccordionTitle"><span>ワークライフバランスは？</span></div>
                <div class="accordion-content">福利厚生などの様々な制度があります。</div>
            </div>
            <div class="accordion-item">
                <div class="accordion-title jsAccordionTitle"><span>具体的にはどのような制度がありますか？</span></div>
                <div class="accordion-content">保養所や財形など他にも多数ご用意しています。</div>
            </div>
            <div class="accordion-item">
                <div class="accordion-title jsAccordionTitle"><span>育児休暇制度はありますか？</span></div>
                <div class="accordion-content">あります。リフレッシュ休暇や産前産後休暇など取得可能です。</div>
            </div>
        </div>
    </div>
</section>
<section id="faq-benefits" class="faq-benefits">
    <div class="sub-inner  sub-inner-faq">
        <h2 class="sub-title faq-main-title2">福利厚生について</h2>
        <div class="accordion">
            <div class="accordion-item">
                <div class="accordion-title jsAccordionTitle"><span>どのような福利厚生制度がありますか？</span></div>
                <div class="accordion-content">社員向けジムや社会保険など完備しております。</div>
            </div>
            <div class="accordion-item">
                <div class="accordion-title jsAccordionTitle"><span>財形貯蓄制度の内容は？</span></div>
                <div class="accordion-content">財形貯蓄を支援する制度です。</div>
            </div>
            <div class="accordion-item">
                <div class="accordion-title jsAccordionTitle"><span>社内イベントの内容は？</span></div>
                <div class="accordion-content">スポーツ大会などレクリエーションを行います</div>
            </div>
            <div class="accordion-item">
                <div class="accordion-title jsAccordionTitle"><span>部活動について教えてください。</span></div>
                <div class="accordion-content">テニス部、サッカー部、野球部があります。社員であればどなたでも入部可能です。</div>
            </div>
            <div class="accordion-item">
                <div class="accordion-title jsAccordionTitle"><span>資格取得支援制度はいくら補助が出ますか？</span></div>
                <div class="accordion-content">ファイナンシャルプランナー2級取得時に1万円支給します。</div>
            </div>
            <div class="accordion-item">
                <div class="accordion-title jsAccordionTitle"><span>年次休暇について教えてください</span></div>
                <div class="accordion-content">12/29-1/3までの6日間</div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>