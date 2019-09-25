<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//apps.bdimg.com/libs/bootstrap/3.2.0/css/bootstrap.min.css">
  </head>

  <body>
    <div class="container">
        <h2>Simple Collapsible</h2>
        <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">简单的折叠</button>
        <div>
            <table>
                <tr>
                    <th><button type="button" data-toggle="collapse" data-target="#demo" data-parent="#accordion">+</button></th><th>Info Header 1</th><th>Info Header 2</th><th>Info Header 3</th>
                </tr>
            </table>
        </div>
        <div id="demo" class="collapse">
            <table>
                <tr>
                    <td></td><td>Text 1A</td><td>Text 1B</td><td>Text 1C</td>
                </tr>
                <tr>
                    <td></td><td>Text 2A</td><td>Text 2B</td><td>Text 2C</td>
                </tr>
            </table>
        </div>
    </div>

    <script src="//apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//apps.bdimg.com/libs/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>