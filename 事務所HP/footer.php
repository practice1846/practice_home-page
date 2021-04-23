<footer class="active">
        <!-- サイトマップ
        タグ（似通った記事をまとめる）
        お問い合わせページへのリンク
        会社概要
        地図
        会社のロゴマーク
        SNSへのリンク
        コピーライト表示 -->
        <ul class="footer-menu">
            <li class="footer-menu-item"><a href="#">HOME</a></li>
            <li class="footer-menu-item"><a href="#">ABOUT</a></li>
            <li class="footer-menu-item"><a href="#Service">SERVICE</a></li>
            <li class="footer-menu-item"><a href="#">TEAM</a></li>
            <li class="footer-menu-item"><a href="<?php get_template(); ?>/inquiry">CONTACT</a></li>
        </ul>
        <div class="mail">
            <a href="<?php get_template(); ?>/inquiry">
                <i class="far fa-envelope mail-icon fa-2x"></i>
                <div class="mail-address">masakatushihou05@cup.ocn.ne.jp</div>
            </a>
        </div>
        <div class="copy-right">&copy</div>
    </footer>
    <?php wp_footer(); ?>
    <script>
        const navigation = document.querySelector('.navigation');
        const header = document.querySelector('header');
        const main = document.querySelector('main');
        const footer = document.querySelector('footer');
        // function toggleMenu(){
            document.querySelector('.toggle').onclick = function(){
                this.classList.toggle('active')
                navigation.classList.toggle('active');
                header.classList.toggle('active');
                // main.classList.toggle('active');
                footer.classList.toggle('active');
            }
            function toggleMenu() {
                document.querySelector('.toggle').classList.toggle('active');
                navigation.classList.toggle('active');
                header.classList.toggle('active');
                footer.classList.toggle('active');
            }
            <?php if (is_page('inquiry')): ?>
                footer.classList.toggle('active');
            <?php endif; ?>
        // }
        <?php if(is_front_page()): ?>
            window.addEventListener('scroll', function(){
                header.classList.toggle("sticky", window.scrollY > 0);
            });
        <?php endif; ?>
        <?php if(!is_front_page()): ?>
            header.classList.add('sticky');
        <?php endif; ?>
        // function topScroll() {
        //     scrollTo(0, 0);        //分からない
        // }
    </script>
</body>
</html>