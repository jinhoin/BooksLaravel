{{-- <h1>hello Laravel</h1> --}}

<h1>
<?= 
    isset($greeting) ? "{$greeting}" : 'here ';
    ?>

    <?=
        $name;
    ?>

</h1>