<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
	<link rel="icon" href="img/favicon.png" type="image/x-icon">

    <title>工作申請 - 註冊護士</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .error-box {
        background: #fff9f9;
        border: 1.5px solid #c02b0a;
        border-radius: 5px;
        box-shadow: 0 1px 4px rgba(0, 0, 0, .11), 0 0 4px rgba(18, 25, 97, .041);
        margin-bottom: 8px;
        margin-top: 8px;
        padding: 10px 16px 10px 28px;
        position: relative;
        width: 100%;
    }

    .simple-box {
        background: #E9ECEF;
        border: 1px solid #CCCCCC;
        border-radius: 5px;
        margin-bottom: 8px;
        margin-top: 8px;
        padding: 10px 16px 10px 28px;
        position: relative;
        width: 100%;
    }

    .title {
        color: #634da0
    }
    .form-label, .form-check, .form-select{
        font-family: 'Poppins', sans-serif !important;
        font-weight: normal !important;
        color: #787878 !important;
    }
    </style>
</head>

<body>
    <div class="page-wrapper">
        <div class="preloader"></div>
        <?php include 'header.php'; ?>
        <div class="container mt-5 mb-5">
            <form id="jobTitleForm" class="needs-validation" action="send-job-title-mail.php" method="post" novalidate>
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title jobUpperSpace">註冊護士申請</h1>
                        <input type="hidden" id="job_title" name="job_title" value="註冊護士">
                        <div class="row mt-5">
                            <div class="col-md-6 col-sm-12">
                                <h6 for="fname" class=" form-label">名字</h6>
                                <input type="text" class="form-control" id="fname" name="fname" required>
                                <div class="invalid-feedback error-box">
                                    此欄位為必填
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 colTopMargin">
                                <h6 for="lname" class="form-label">姓氏</h6>
                                <input type="text" class="form-control" id="lname" name="lname" required>
                                <div class="invalid-feedback error-box">
                                    此欄位為必填
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-6 col-sm-12">
                                <h6 for="email" class=" form-label">電子郵件</h6>
                                <input type="email" class="form-control" id="email" name="email" required>
                                <div class="invalid-feedback error-box">
                                    此欄位為必填
                                </div>
                            </div>
                             <div class="col-md-6 col-sm-12 colTopMargin">
                                <h6 for="tel" class=" form-label">電話</h6>
                                <input type="tel" class="form-control" id="phone" name="phone" required>
                                <div class="invalid-feedback error-box">
                                    此欄位為必填
                                </div>
                            </div>
                        </div>

           

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h6 for="address" class=" form-label">地址</h6>
                                <input type="text" class="form-control" id="address" name="address" required>

                                <div class="row mt-4">
                                    <div class="col-md-4 col-sm-12">
                                        <h6 for="city" class=" form-label">城市</h6>
                                        <input type="text" class="form-control" id="city" name="city" required>
                                    </div>
                                    <div class="col-md-4 col-sm-12 colTopMargin">
                                        <h6 for="state" class="form-label">省份</h6>
                                        <input type="text" class="form-control" id="state" name="state" required>
                                    </div>
                                     <div class="col-md-4 col-sm-12 colTopMargin">
                                        <h6 for="zip" class=" form-label">郵編號碼</h6>
                                        <input type="text" class="form-control" id="zip" name="zip" required>
                                    </div>
                                </div>

                                <div class="invalid-feedback error-box">
                                    此欄位為必填。請填寫以下欄位：地址, 城市, 省份, 郵編號碼。
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h6 for="question1" class=" form-label">你最喜歡護理工作的哪一個部分？</h6>
                                <textarea class="form-control" id="question1" name="answer1" required rows="2"></textarea>
                                <div class="invalid-feedback error-box">
                                    此欄位為必填
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h6 for="question2" class=" form-label">你認為自己為什麼適合成為註冊護士？</h6>
                                <textarea class="form-control" id="question2" name="answer2" required  rows="2"></textarea>
                                <div class="invalid-feedback error-box">
                                    此欄位為必填
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h6 for="question3" class=" form-label">你希望從我們公司裡獲得什麼最重要的東西？</h6>
                                <textarea class="form-control" id="question3" name="answer3" required  rows="2"></textarea>
                                <div class="invalid-feedback error-box">
                                    此欄位為必填
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h6 class="form-label">你希望的工作時間？</h6>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="employer" id="fulltime"
                                        value="全職" required>
                                    <label class="form-check-label" for="fulltime">全職</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="employer" id="parttime" value="兼職"
                                        required>
                                    <label class="form-check-label" for="parttime">兼職</label>
                                </div>
                                <div class="invalid-feedback error-box">
                                    此欄位為必填
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h6 class="form-label"> 你會怎樣來往工作場所？</h6>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="travel" id="personal"
                                        value="私家車" required>
                                    <label class="form-check-label" for="personal">私家車</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="travel" id="ride" value="搭車"
                                        required>
                                    <label class="form-check-label" for="ride">搭車</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="travel" id="public"
                                        value="公共交通" required>
                                    <label class="form-check-label" for="public">公共交通</label>
                                </div>
                                <div class="invalid-feedback error-box">
                                    此欄位為必填
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h6 for="select1" class=" form-label">如果你成功被聘用，你工作中最大的動力會是什麼？</h6>
                                <select class="form-select mt-2" aria-label="Default select example" name="motivation">
                                    <option value="彈性的工作時間">彈性的工作時間</option>
                                    <option value="薪資">薪資</option>
                                    <option value="健康福利">健康福利</option>
                                    <option value="有意義的工作">有意義的工作</option>
                                    <option value="與良好家庭合作">與良好家庭合作</option>
                                    <option value="來自公司的支持與指導">來自公司的支持與指導</option>
                                    <option value="團隊環境">團隊環境</option>
                                    <option value="表揚">表揚</option>
                                </select>
                                <div class="invalid-feedback error-box">
                                    此欄位為必填
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h6 for="select2" class=" form-label"> 你是透過什麼方式了解到我們的？</h6>
                                <select class="form-select mt-2" aria-label="Default select example"
                                    name="information_source">
                                    <option value="口碑">口碑</option>
                                    <option value="招聘網站">招聘網站</option>
                                    <option value="招聘會">招聘會</option>
                                    <option value="我們的網站">我們的網站</option>
                                    <option value="FCHS員工">Full Care Health Services員工</option>
                                    <option value="社交媒體">社交媒體</option>
                                    <option value="其他">其他</option>
                                </select>
                                <div class="invalid-feedback error-box">
                                    此欄位為必填
                                </div>
                            </div>
                        </div>

                        <div class="btn-box mt-4 mb-5" style="margin-top: 20px">
                            <button type="submit" class="theme-btn btn-style-one mb-3"><span class="txt">提交</span></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <?php include 'footer.php' ?>
    </div>

    <script>
    // JavaScript to handle form submission and validation
    const form = document.getElementById('jobTitleForm');

    form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
        }
        form.classList.add('was-validated');
    });
    </script>
</body>

</html>