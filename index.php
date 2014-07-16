<!DOCTYPE html>
<html>
    <?php
        $page=filter_input(INPUT_GET,"p",FILTER_SANITIZE_SPECIAL_CHARS);
        if(!$page){
            $page="home";
        }
        ini_set('display_errors',1);
        error_reporting(E_ALL);
        $title="gho testing";
        if($page){
            $title="$page - gho testing";
        }
    ?>
    <head>
        <title>silk framework - grid system - sympol foundation</title>
        <!--[if lte IE
        8]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="css/compiled/silk.css"/>
        <link rel="stylesheet" href="assets/css/silk-doc.css"/>
    </head>
    <body>
        <div id="header">
            <div id="logo">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/155378/kanga.png">
            </div>
            <div>
                <h1 class="no-toc">sympol foundation
                    <small>silk framework</small>
                </h1>
            </div>
        </div>
        <div class="toc">
            <h5 class="no-toc">Contents</h5>
        </div>
        <ul class="list-inline">
            <?php
                $path='views';
                foreach (new DirectoryIterator($path) as $file) {
                    if($file->isFile()){
                        $active='';
                        if(substr($file->getFilename(),0,-4)===$page){
                            $active='active';
                        }
                        echo '<li class="' . $active . '"><a href="#" class="nav" id="' . substr($file->getFilename(),0,-4) . '">' . substr($file->getFilename(),0,-4) . '</a>' . '</li>';
                    }
                }
            ?>
        </ul>
        <?php
            include_once "views/$page.php"
        ?>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="assets/js/stoic.jq.js"></script>
        <script>
            var a = $('.toc');
            a.stoic('option', 'tocIgnore', '.no-toc,.no-stoic').stoic('option', 'offset', 76);
            a.stoic('option', 'tocScrollHooks', [
            
            function() {
                a.find('.list-unmarked').scrollTop(a.find('.list-unmarked').scrollTop() + a.find('.list-unmarked .active').position().top - a.find('.list-unmarked').height() / 2 + a.find('.list-unmarked .active').height() / 2);
            }]);
            $('.toc').awayClick(function(e) {
                e.stopPropagation();
                $(this).find('>.no-toc').next().hide();
            });
            $(':header:not(.no-toc,.no-stoic)').click(function(e) {
                e.stopPropagation();
                a.find('>.no-toc').next().show()
            });
            a.stoic('init').find('>.no-toc').click(function() {
                var $this = $(this);
                $this.next().toggle();
            }).next().on('hide', function() {
                $('.toc').animate({
                    width: 75,
                    opacity: 0.3
                });
            }).on('show', function() {
                $('.toc').animate({
                    width: 350,
                    opacity: 1
                });
            }).hide();
            $('div[data-example]').each(function(i, el) {
                var pre = $('<pre class="prettyprint "' + ($(el).data('example') || '') + '/>'),
                    data = $(el).html().split(/\n/g);
                var ret = [];
                $.each(data, function(i, str) {
                    if (str !== "") {
                        ret.push(str.replace(/^ {8}/, ''));
                    }
                });
                pre.text(ret.join('\n'));
                $(el).after($('<div class="silk-example example"><span class="lang">' + ($(el).data('example') || 'html') + '</span></div>').append(pre));
            });
        </script>
        <form action="" method="get" id="jump">
            <input type="hidden" id="p" name="p"/>
        </form>
        <script>
            $('.nav').click(function(e){
                e.preventDefault();
               $('#p').val($(this).attr('id')) ;
               $('#jump').submit();
            });
        </script>
    </body>
</html