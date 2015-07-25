<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <!-- TemplateBeginEditable name="doctitle" -->
        <title>Sam Noble WordPress Theme Documentation</title>
        <!-- TemplateEndEditable -->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="../apple-touch-icon.png">

        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.5/cosmo/bootstrap.min.css">
        <link rel="stylesheet" href="../css/main.css">

        <script src="../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <!-- TemplateBeginEditable name="head" -->
        <!-- TemplateEndEditable -->
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        
        
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <script src="../js/main.js"></script>
        <!-- TemplateBeginRepeat name="custom-field-group" -->
        <div class="container">
            <h2><!-- TemplateBeginEditable name="custom-field-group-name" -->Exhibits<!-- TemplateEndEditable --></h2>
            <!-- TemplateBeginEditable name="custom-field-group-description" -->
            <p>This field group allows a start date and end date to be given for an <code>exhibit</code> post type.</p>
            <!-- TemplateEndEditable -->
            <table width="100%" cellpadding="5px">
                <tbody>
                    <tr>
                        <th scope="col">Label</th>
                        <th scope="col">Key</th>
                        <th scope="col">Type</th>
                        <th scope="col">Required</th>
                        <th scope="col">Conditional</th>
                    </tr>
                    <!-- TemplateBeginRepeat name="custom-field-group-table-row" -->
                    <tr>
                        <td><!-- TemplateBeginEditable name="custom-field-group-table-header-label" -->Exhibit Start Date<!-- TemplateEndEditable --></td>
                        <td><!-- TemplateBeginEditable name="custom-field-group-table-header-key" -->exhibit_start_date<!-- TemplateEndEditable --></td>
                        <td><!-- TemplateBeginEditable name="custom-field-group-table-header-type" -->Date Picker<!-- TemplateEndEditable --></td>
                        <td><!-- TemplateBeginEditable name="custom-field-group-table-header-required" -->No<!-- TemplateEndEditable --></td>
                        <td><!-- TemplateBeginEditable name="custom-field-group-table-header-conditional" -->No<!-- TemplateEndEditable --></td>
                    </tr>
                    <!-- TemplateEndRepeat -->
                </tbody>
            </table>
            <div class="location-rules">
        <h3>Location Rules</h3>
                <!-- TemplateBeginEditable name="custom-field-group-location-rules" -->
                <p>If Post Type is equal to Exhibit</p>
                <p>If Post Taxonomy is <em>not</em> equal to Permanent Exhibitions</p>
                <!-- TemplateEndEditable -->
                </div>
            <div class="conditionals">
                <h3>Conditionals</h3>
                <!-- TemplateBeginEditable name="custom-field-group-conditionals" -->
                <p>None</p>
                <!-- TemplateEndEditable -->
                </div>
        </div>
        <!-- TemplateEndRepeat -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-65042911-1','auto');ga('send','pageview');
        </script>
    </body>
</html>