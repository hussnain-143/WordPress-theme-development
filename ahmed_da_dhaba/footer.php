<footer class="footer-container">
    <p>&copy; <?php echo date('Y'); ?> <strong>Ahmed da Dhaba</strong>. All rights reserved.</p>
    <br>
    <p>Developed by <strong>Hussnain Ahmed </strong></p>
</footer>
<?php wp_footer(); ?>
</body>
</html>
<script>
        // JavaScript to toggle the mobile menu visibility
        const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
        const menuContainer = document.querySelector('.menu-container');

        mobileMenuToggle.addEventListener('click', () => {
            menuContainer.classList.toggle('show');
        });
    </script>