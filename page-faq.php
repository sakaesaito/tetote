<?php get_header(); ?>

<section id="details" class="details">
        <div class="ditails-mv faq-mv" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/faq-fv.jpg'); background-size: cover;background-position: center;background-repeat: no-repeat;">
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
        <ol class="c-breadcrumbs">
            <?php if (function_exists('bcn_display')) bcn_display_list(); ?>
        </ol>
    </div>
    <section id="faq-btn">
        <div class="sub-inner">
            <div class="details-btn-box faq-btn-box">
                <button class="details-btn" data-target="#faq-details">応募・選考について</button>
                <button class="details-btn" data-target="#faq-career">キャリアについて</button>
                <button class="details-btn" data-target="#faq-benefits">福利厚生について</button>
            </div>
        </div>
    </section>
    <section id=faq-details>
        <div class="sub-inner sub-inner-faq">
            <h2 class="sub-title faq-main-title">応募・選考について</h2>
            <div class="accordion">
                <div class="accordion-item">
                    <div class="accordion-header">
                        <span class="q-mark">Q</span>
                        <span class="question-text">応募資格はありますか？</span>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="accordion-content"><span>人の役に立つことを考えたり行動したりすることが好きな方</span></div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">
                        <span class="q-mark">Q</span>
                        <span class="question-text">応募方法は？</span>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="accordion-content"><span>弊社採用サイトからエントリーしてください。</span></div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header accordion-header-flow">
                        <span class="q-mark">Q</span>
                        <span class="question-text">選考フローは？</span>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="accordion-content"><span>書類選考ののち数回の面接を予定しております。</span></div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">
                        <span class="q-mark">Q</span>
                        <span class="question-text">選考にかかる時間は？</span>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="accordion-content"><span>1週間ほどお時間を頂いております</span></div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">
                        <span class="q-mark">Q</span>
                        <span class="question-text">面接では何を聞かれますか？</span>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="accordion-content"><span>志望動機などお聞かせいただきます</span></div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">
                        <span class="q-mark">Q</span>
                        <span class="question-text">面接官はどんな人ですか？</span>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="accordion-content"><span>弊社社員にて行います
                    </span></div>
                </div>
            </div>
    </section>
    <section id="faq-career">
        <div class="sub-inner  sub-inner-faq">
            <h2 class="sub-title faq-main-title2">キャリアについて</h2>
            <div class="accordion">
                <div class="accordion-item">
                    <div class="accordion-header">
                        <span class="q-mark">Q</span>
                        <span class="question-text">自分の希望するキャリアパスに進むことはできますか？</span>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="accordion-content"><span>個人の能力を考慮いたします。</span></div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">
                        <span class="q-mark">Q</span>
                        <span class="question-text">転勤はありますか？</span>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="accordion-content"><span>業務の必要に応じて、転勤が発生する場合があります。</span></div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">
                        <span class="q-mark">Q</span>
                        <span class="question-text">転勤の希望は出せますか？</span>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="accordion-content"><span>可能です。ご相談ください。</span></div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">
                        <span class="q-mark">Q</span>
                        <span class="question-text">ワークライフバランスは？</span>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="accordion-content"><span>福利厚生などの様々な制度があります。</span></div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">
                        <span class="q-mark">Q</span>
                        <span class="question-text">具体的にはどのような制度がありますか？</span>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="accordion-content"><span>保養所や財形など他にも多数ご用意しています。</span></div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">
                        <span class="q-mark">Q</span>
                        <span class="question-text">育児休暇制度はありますか？</span>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="accordion-content"><span>あります。リフレッシュ休暇や産前産後休暇など取得可能です。</span></div>
                </div>
            </div>
        </div>
    </section>
    <section id="faq-benefits" class="faq-benefits">
        <div class="sub-inner  sub-inner-faq">
            <h2 class="sub-title faq-main-title2">福利厚生について</h2>
            <div class="accordion">
                <div class="accordion-item">
                    <div class="accordion-header">
                        <span class="q-mark">Q</span>
                        <span class="question-text">どのような福利厚生制度がありますか？</span>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="accordion-content"><span>社員向けジムや社会保険など完備しております。</span></div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">
                        <span class="q-mark">Q</span>
                        <span class="question-text">財形貯蓄制度の内容は？</span>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="accordion-content"><span>財形貯蓄を支援する制度です。</span></div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">
                        <span class="q-mark">Q</span>
                        <span class="question-text">社内イベントの内容は？</span>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="accordion-content"><span>スポーツ大会などレクリエーションを行います</span></div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">
                        <span class="q-mark">Q</span>
                        <span class="question-text">部活動について教えてください。</span>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="accordion-content"><span>テニス部、サッカー部、野球部があります。社員であればどなたでも入部可能です。</span></div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">
                        <span class="q-mark">Q</span>
                        <span class="question-text">資格取得支援制度はいくら補助が出ますか？</span>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="accordion-content"><span>ファイナンシャルプランナー2級取得時に1万円支給します。</span></div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">
                        <span class="q-mark">Q</span>
                        <span class="question-text">年次休暇について教えてください</span>
                        <span class="toggle-icon">+</span>
                    </div>
                    <div class="accordion-content"><span>12/29-1/3までの6日間</span></div>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>