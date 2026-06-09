    <footer>
      <div class="container">
        &copy; Creative Folk <?= date('Y'); ?>
      </div>
    </footer>
    <script src="../js/site.js"></script>
  </body>
</html>

<script>
const imageInput = document.getElementById('image');
const preview = document.getElementById('preview');

imageInput.addEventListener('change', function () {

    const file = this.files[0];

    if (!file) return;

    const reader = new FileReader();

    reader.onload = function (e) {
        preview.src = e.target.result;
        preview.style.display = "block";
    };

    reader.readAsDataURL(file);
});
</script>