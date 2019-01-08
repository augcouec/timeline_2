        <footer class="footer">
            <p class="footer__copyright">
                <?php echo html::decode($site->copyright()->kirbytext()) ?>
            </p>
        </footer>

    </body>

    <?php echo js('assets/scripts/libraries/isotope.pkgd.min.js') ?>
    <?php echo js('assets/scripts/main.min.js') ?>

</html>