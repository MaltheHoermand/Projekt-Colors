<?php
class View {
    static function print_card ($colors) {

        foreach ($colors as $color) {
            echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <div class="col-sm-4" style="color: ' . htmlspecialchars($color->hexString) . ';">
                <div class="card border mb-3">
                    <div class="card-body">
                        <h5 class="card-title">' . htmlspecialchars($color->name) . '</h5>
                        <p class="card-text">hex: ' . htmlspecialchars($color->hexString) . '</p>
                        <p class="card-text">rgb: (' . $color->rgb->r . ', ' . $color->rgb->g . ', ' . $color->rgb->b . ')</p>
                        <p class="card-text">hsl: (' . $color->hsl->h . ', ' . $color->hsl->s . ', ' . $color->hsl->l . ')</p>
                    </div>
                </div>
            </div>';
        }
    }
}