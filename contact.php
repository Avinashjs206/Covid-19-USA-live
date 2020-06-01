<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'link/link.php' ?>
    <?php include 'css/style.php' ?>
</head>
<body>
    <div>
        <?php include 'nav.php'?>
    </div>
<div class="container-fulid pt-5 pb-5" id="contect">
            <div class="section_header text-center mb-5 mt-5">
                <h1>CONTECT US</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label >Username</label>
                                <input type="text" name="username" class="form-control" 
                                    placeholder="Username" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label >Email address</label>
                                <input type="email" class="form-control" name="email"
                                    placeholder="name@example.com" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label >Mobile No</label>
                                <input type="number" class="form-control" name="mobile"
                                    placeholder="mobile no" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label for="symptoms" class="d-block">Select Sympyoms</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" name="coronasym[]">
                                <label class="form-check-label" for="inlineCheckbox1">Cold</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" name="coronasym[]">
                                <label class="form-check-label" for="inlineCheckbox2">Fever</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" name="coronasym[]">
                                <label class="form-check-label" for="inlineCheckbox3">Difficulty in Breathing</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4" name="coronasym[]">
                                <label class="form-check-label" for="inlineCheckbox4">Feeling Weak</label>
                              </div>
                            </div>
                            <div class="form-group mt-2">
                                <label for="exampleFormControlTextarea1">Describe how are you feeling</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="masessage" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn" name="submit">SUBMIT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'?>
</body>
</html>