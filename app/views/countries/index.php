<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  </head>
  <body>

      <section class="container mt-5" style="width: 100%;">
        <!-- op deze plek komt de tapel -->
        <div class="tapel-aanvragen">
          <div class="container">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Landen</th>
                  <th scope="col">Continent</th>
                  <th scope="col">Nummer</th>
                  <th scope="col">Nummer</th>
                </tr>
              </thead>
              <?php


              $tableRows = "";


              foreach ($data['country'] as $key => $value) {
                $tableRows .= "
        <td>$value->id</td>
        <td>$value->name</td>
        <td>$value->capitalCity</td>
        <td>$value->continent</td>
        <td>$value->population</td>    
        </tr> ";
              }
              ?>
              <tbody>
                <tr>
                  <?php
                  echo $tableRows;
                  ?>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <?php
        ?>
      </section>
    </div>
  </div>
</div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>