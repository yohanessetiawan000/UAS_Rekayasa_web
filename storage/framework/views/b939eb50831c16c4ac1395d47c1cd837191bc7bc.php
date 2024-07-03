<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD menggunakan LIVEWIRE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <?php echo \Livewire\Livewire::styles(); ?>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container-fluid">
            <a  class="navbar-brand" href="/">CRUD dengan Livewire - YOHANES SETIAWAN</a>
        </div> 
    </nav>

    <div class="container"> 
        <div class="row justify-content-center mt-3">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('mahasiswa')->html();
} elseif ($_instance->childHasBeenRendered('wRdDiJm')) {
    $componentId = $_instance->getRenderedChildComponentId('wRdDiJm');
    $componentTag = $_instance->getRenderedChildComponentTagName('wRdDiJm');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('wRdDiJm');
} else {
    $response = \Livewire\Livewire::mount('mahasiswa');
    $html = $response->html();
    $_instance->logRenderedChild('wRdDiJm', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>
    <?php echo \Livewire\Livewire::scripts(); ?> 
</body>
</html><?php /**PATH C:\xampp\htdocs\Rekweb\resources\views/home.blade.php ENDPATH**/ ?>