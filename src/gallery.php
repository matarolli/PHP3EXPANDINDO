<section id="gallery">
    <h2>Galeria de Imagens</h2>
    <div class="gallery-container">
        <?php
        // Definir o diretório das imagens
        $imageDirectory = "src/assets/img/";

        // Lista de imagens na pasta (ajuste o nome das imagens conforme necessário)
        $images = [
            "imagem1.png",
            "imagem2.png",
            "imagem3.png",
            "imagem4.png",
            "imagem5.png",
            "imagem6.png"
        ];

        // Loop para exibir cada imagem
        foreach ($images as $image) {
            $imagePath = $imageDirectory . $image;
            echo "<div class='gallery-item'><img src='$imagePath' alt='Imagem'></div>";
        }
        ?>
    </div>

</section>