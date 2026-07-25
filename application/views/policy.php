<div class="visually-hidden" id="Offers"></div>
<section class="offers">
    <h1 class="offers__title">
        <?php echo isset($title) ? $title : ''; ?>
    </h1>
    <div class="container offers__container" style="min-height: 45vh">
        <?php if (isset($text) && $text) {
            echo '<p>'.$text.'</p>';
        }
        ?>
    </div>
</section>

