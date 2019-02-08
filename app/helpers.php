<?

if (! function_exists('markdown')) {
    function markdown($text = null){
        $text = new Documentation();
        $text = $text->get($file);
        return app(ParsedownExtra::Class)->text($text);
    }
    
}