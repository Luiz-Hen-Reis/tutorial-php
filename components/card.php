<div class="p-2 rounded bg-stone-900">
    <div class="flex">
        <div class="w-1/3">imagem</div>
        
        <div>
            <a href="/livro?id=<?=$livro['id']; ?>" class="font-semibold hover:underline">
                <?= $livro['titulo']; ?>
            </a>
            <div class="text-xs italic"><?= $livro['autor']; ?></div>
            <div class="text-xs italic">⭐️⭐️⭐️⭐️⭐️ (3 Avaliações)</div>
        </div>
    </div>
        
    <div class="text-sm">
    <?= $livro['descricao']; ?>
    </div>
</div>