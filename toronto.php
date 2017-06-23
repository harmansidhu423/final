

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Toronto</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="CSS/bootstrap.min.css"/>

    <!-- Optional theme -->
    <link rel="stylesheet" href="CSS/bootstrap-theme.min.css"/>



</head>
<body>

<nav class="nav navbar-inverse">
    <ul class="nav navbar-nav">

        <li><a href="stores.php?cityID=1">Vancouver</a></li><li><a href="stores.php?cityID=2">Calgary</a></li><li><a href="stores.php?cityID=3">Toronto</a></li><li><a href="stores.php?cityID=4">Montreal</a></li>        <li><a href="add_store.php">Add a Store</a></li>
    </ul>

</nav><main class="container"><table class="table table-striped table-hover">
        <tr><th>Store Name</th>
            <th>Address</th>
            <th>Manager</th>
            <th>phone</th>
            <th>Store Image</th>
            <th>Delete</th></tr><tr><td>Eaton Centre</td>
            <td>65 Dundas Street West</td>
            <td>Jen Garza</td>
            <td>416-979-2025</td>
            <td><img src="data:image/webp;base64,UklGRoAEAABXRUJQVlA4IHQEAAAQFACdASpDADIAPm0wkUYkIyGhLNgMqIANiWMAx5+4Cem0BdVmouRMMe0jqU79/hcnaeO8FNKJNS8r046pivWp+vRU9P+8uJH3R5+anyD06M8Q9s6F8JZIdq/sFVCpGset1WlAU3iJ3WsWY/P06EqjyHDYCYNo2TLXXpKD9AYPnJu7whZ9QOuVR9H4WMXzmTgx8QZxEWZ2pWt0cioj9Vnqw2EopZ69BkoAAP7/IpNwVhPxB+AzGn9PUlgi0y1CG+OHW91Ul3ANrg6TVVbG3shJ7FJcp0utavktkMJIS1axpWbi8gD9/DDGe5R/jNDHlNYY6BhozS9ZZSX7zTCwQHXVPbccZJv4gMgerL8SlyB90U1oZ8V7oFgR2FZYWjdbv9Y0otToyqu04rnUM4ZXW6QgV/CZoErA++ffnf7RpJbOaUbkF5y4Lb8W/jO0HEoYbA5UGzMIeFzYJal6FXH7uyPHyXmxQBi9zFOzyHpoKcFEMRFZ/Roovx/1kdoadYZtEUjtdaCE2wEBCf3AuOqGZ7NB6WXyDUqWkFBRKEZsvmvF/eQFhYON4AJibqClgEen6OHiACVIY6LjABjW96LrqxhUJddCFuld5zpwaoBOI1HNMowXOzch5ylftbUcpbgtda/wIJduWu13pgCgHTbfWCypVTmp5sArbYeIg6GYAxUqxiGH+YHk4w9IqP53hjhdp8AreljXq+TBp8KTtRI98NImwGo+uIxWfWc3yP0+4xCvFBtrh2InHw+CDi+BJrqqB/20RHYrWz/AyckfBwidz2KTmTU1aWApo7OJ2GeUlGz7VEFkOex5IPTBdd7c/XKhK2DOn/Varb3b6BM5VX/AgfXjfImQLY9O+gG5LgBlsiULslp+4IOqyZEDlV2jpMtRASe3ambNa7sFKfm77xJSk9uuG2sOVd/v+FkB8UqhlHXQ+XS9SBZffsBf7j/XgujjaFfQmpMHKhSwBkDfIV6KghjX6+FFgYT+kl9cCeI1Pxp7srcSdwn5XzuS6HLWsnF0d8VDGlzXUcQTJSbA6aJaxONPeE6WXmZDyl3ZyZcWod7XBmT3oJ+Z9zlHJyN6JvgaklpW/fkxlEQDYPWE8IpV+2+y3XWaXIz58f+Y+R5Z7w+4K8/x1taA/xD67Uxmvyy07750rYjkzkX6b43Oj9Ej2S7MZY85ZFgpyfvwiGxunZiuBqSLdlLz1RTPKp3/ae6MnyBwL5sP3AgEahTqnAYOQlbFO1ysZVHqvsJ/mxbjiKRPSwb93ZzEy3RPvFntjfb3T2enHEhYz2G4/HJCNwe71eZj7yU231RpmAQtlLxyZpmKyLMYuXsBozCOr1rJ9loLj528FKQ/lh1Fz+q89cU3CzymCYg90Ubt+maXfJzRhJAu9ftkkAVk+RVHc1WFa9OIRTyHBIoYlIT8oGaL/5SQpX5gQvYQXL6fgJ4d+X2eHVIA+5T5AiMZjYUtKCrj++6xYxixJjEASgc7KutFQzTDj2U3WvfOSSE49QzmSCObR/8ARfUAAAA="></td>
            <td><a href="delete_store.php?storeID=5&cityID=3">Delete</a></td></tr><tr><td>West Toronto</td>
            <td>2129 St. Clair Avenue West</td>
            <td>Rick Ryder</td>
            <td>416-766-8141</td>
            <td><img src="data:image/webp;base64,UklGRkgEAABXRUJQVlA4IDwEAADwEACdASpCADIAPm0uk0YkIqGhKA1QgA2JQBk3hwhz9VfBPxm+7o9FwvUP3g/Ar+ez/jIXew6kypjHb6MGi76pMXrQswSCJ7qqMEtGsdL/N1NASBe31EPdqsqsoGz4s69xJL6HELON5GFc2wfdom91fdMky39ioFwHzdKRw6btS4cPtJalaoe+U1uhhCrv90gA/v7/QyqVtbpTXIQp0xK98Tu5afuoETvjcM71trxEIOvsdx9VOkd9F3LL3B0C7/ho65tpJDQNBOWDiZTsY61ULXZSjoL5PmPVxDZj/1rVdkwYM7GmutG798u/39cFk14EzcOOauGobEdIo/cx+iaQMxuRoUrt6npt4pqkiS2kjCLcw8kmyscggU9Utmvnagegtv/M/PpL7bDprgCoHEabH4/UBnwfp7Tiu5L0/66Odn4U/FkkttT7kyvb8hcqnjYujQZIuJQPmxQoaR2ZY0rL8LSe9OE+wehvPbRYV5H2Gy8BQw4UwY/xKGMxYBHlDYCV3sJ+X+Ts76L6f/k7RbzixtuqDFxkHCm7BW2pf8e3cgq+y9gQE+bVWdQzNirHoijR+9YhH1dPNXsR7owgQSPFG927MDCmDy/8EbEdH60sQ8jr/1wLP2zxnqglO3AGfabEO3lX2IHoPj+xy0Zns3nPBauM7xdoyAq41JfxatL56JOXWfCHPS3gwxZKuTA9n94BtnFle6usJjZZj1BGrZxKUbgHUXDb3gI2cfY523RVMJhF+unibHJDyjfPQ5cNlejQ31RM9vzbr06Bam7ahd7YPi0iDoH313N2w3cyi+rbzOog+Aga55VkzlxCC+Ur0qJWVaGf841/vMhP4F8nNwOXKW+c3GfgfjPxNI7ye6yR/PQ3ul8QiqbL6MQ3uURk0XngqvFj6O+HFy/i1vAHeQCxDrmG5Cb8X8Wd47BwfqBUSRuO5izqO39dqcPvdWPEkHhZjpm47xV26EqioHZaKb/SvgBAWJATo7gppZEQ6uETc0skPSObVGmMOO5dFiOdrCvnifj2MH8jjgZR9NLQk5lE3rOPZ+bjtao9f6ny38Xh1mLl78d5mrwzijzvz1iwVQGoc5qHOpa8rzBa7502aFeCZSvhb+WwhbWgdyF1kPnOvf4AEuWHyGqIGPGHpfrfA5MjrDLmSVQYQ1YdXOby1Tbw+gO55HeTqtUbb5TJuVpatFPqYLQqS7r9ee5KgXutdMLaZgyY95lYLjK0Zw1L+y+7juWty+ikkJEzvwrgHenziqsMIdz554eTCPdNr5gsEd0UXUVK5iYPEu8lctaQRdM+FJHfvmvec36KgFw/AK+k3Jg+q0RGJhvRL81BRi6MBNXNowmmXCq8Q4TgsVASnhfAUHpUOliKggH+QD1nGgqmY7X3Jma2FTF2/hzwAdEATXC0+KvnObWuTh7Nn2hLOvxThtJPWdjbPZ+M5gAA"></td>
            <td><a href="delete_store.php?storeID=6&cityID=3">Delete</a></td></tr><tr><td>Danforth</td>
            <td>2681 Danforth Avenue</td>
            <td>Stephanie Hehr</td>
            <td>416-690-6069</td>
            <td><img src="data:image/webp;base64,UklGRnoCAABXRUJQVlA4IG4CAADQDQCdASpDADIAPpE6l0gloyKhsBZrMLASCWUAzmvoPzMs1mWS7tMEFUQfeNPAJOBovmro6yO9Ov46sLjg/VKh3K6T1yVYPMDiP/rvabVJ23uk+Roa2y9lKeE0x02F2cdzSFgD8fq1xRxuWQHUThPnszaRHJElAAD3sJd1M/+GbFCG/5m97PKyPf/i31t+wMYvyW96zHGvkDFmrCrxk+/adeHcySncHfUDM0FJdlpePc+QkoIkWTfY1cei4/+wUf9F0iuJwAUHdKimhz1Y9aubj63yq63cLBE6NZOpOY1sIfocQ2B/qIaDNRbfgBGIzZCkxFIUpn6BcsTFMAhWQdWxaADZ4rSldFh5duxODVaKzzmJp/eNnnhuDe5fs0422iFeG90LINSnmdvAxipDh5NmylsmFabY7soP07Bu6ZHwswM8PkB4bd6z4hZpkvvafu0u+LlA/OpvMRrnIXymrhgyHTaNMgeZaeqL7XYtCfid9zHBVYBMv4s+05OPvmaB3uRUaygNEOcuHg+sqBDbTT8AFRMj/hj2b1s3yvoxdU7CEIevwqk5wUvrhpHn0mHF6T1rpI1W5U4H0w+J4y/AqVgnhLkDNzvVaQZBiWd1qQ7s4lFDExAPziDZNOZnn8wgouqmleOpVDFbB+tffzVHo2ZuJs7K3u7xOVGvFUGENDdmsf8R1GrBG3JyIt8sBLuQDyaTnlF37vLLudxFlmEieTqN1GMdMzxPpyxzjQuEhzpnnsHh82beaHEoZgrJmikThhaFrWxG3AuY9WXAfu2UFyh28+fLvlJYYbptv41qPJYhKTJSJK11ub6ALCfsAAAA"></td>
            <td><a href="delete_store.php?storeID=7&cityID=3">Delete</a></td></tr><tr><td>Yonge & Church</td>
            <td>839 Yonge Street</td>
            <td>Mel Louis</td>
            <td>416-925-9592</td>
            <td><img src="data:image/webp;base64,UklGRqwEAABXRUJQVlA4IKAEAAAwEwCdASpLADIAPm0uk0ckIiGhKbK9IIANiWMAzMhP/F2jTKBqFKVvDq3bId4US09mDy/zapqCraap5Y/rY0JP/KsfUBnlHg5N1IHu2FkUOgV2xJcnlsj66wpUw0JlcfLeE0Dk/5Th8OvSd/Rhca2VD5i58vVMY3A3TZxs8BiMKJ4RXlncDKW3uBQc5U5+gfCGC3UdQOWiKpkTMoWNLCOBgAAA/vjJINwatuNCA9okMlbZHdvcWz6WzdQusTcybjm2fNCiuFG5JvY2fFBGxBdagnYKl7PyEjTJJ7xkQgeDYCzw7v9/CidZ9tLcwtMJ224T8kkVFCx3Q5Nly/bdFCyoS7LKJVjRywzGlQFx3Zf9PMOwx9GX6jCTJkHrEa/mMTrAW6wsy0HMc+ETZqmXBkkS4MCEFIH8JycstmI7AvsAejYOUUcTXJh7bFZ3J8RaT+IylqW1hua/8glAa+OfDkmS99k1nYwWgQ3fJAaQaoNrFZWT7hNyiZ1hEzWeBxxRcWCaf4+ErZn99XmgREtlJp8rOQR0gwf9AgzsXKAwIuDfneBTB2ikAb2bDCvvKjUj88B6Rshn6cbt78okADsM9+7xdL7xawXXcpXYqXoBm1qVAytmbdhygYo8Lrn2bBd0mjme4TUw8HDlp7O+p2V9XKP00kt4BOJq4XueY83sBCrFYoMlA1nt4Tvc3YngNlxYls1aS7b79ZohpoZbu66d+xUFnrAYZW13jVFI7sapD5ebQjco/JedpDJDhSx17JM05e5q3B6IwYJ/Yad/sTM5+o+hIrGy9JR8BA3gYpnrhODRy3VOE9SGWYPOMjYjnabiPUz6gYsmRYHlfwtRITz8/IZSsJWfqnXZmByCs3wgR6ZXrAtxelmohD7ymSOL0Mdl43cwaE78q1FMaDiRxjkBQVqqO+sH2bZjSgBQtThXUoI1q2d8WMHl2vjavyBmHhUSveJh7QqgWGb3u+B8P//62+2qWE25WNdeV+f+xnBix2TlhHroSUovasc5Qi1KhZsao18Ej/GHAB/pAwk0Lx1wK3MR8nzNmx4Jb+nWnAisixoL/zNqEI6RMRJkAEO0nMPcfsFXuFNvcfAlNsUXumGBPq9wBLzq0LoMC5epTWbD/fWKK49eci+dTM+Gh0KLN5w1zMZ4snluO3whek7NjDXm8nO0F9AbcWRcdEKSmP/M1eEHQWqRJc09MnnrqM2Qw1CrnGy7e8bbG4eD35Q7uUCawC5deKxGy37eERJbGPTQdY6NMmjJsEWEabp2IGpaq2aHvNf+GaeL7ylSSN/BexF5CEFTGRDYWQZi33Bq3nUK+s6iHcppP8OZdi9VcLI2TlPAgZWnQFn+t0oOovnozJdl6I3qYC5O6xoErpRXx0uNDxkykZ4xGs3MmycQU+wOY69BRrfnmuylsZS3X1oTg8qpt/VQ+/RxmilXrLkrxA2ebNcTD6QmPtP0YMWofULo/G3nXuHWId/6IfdeXIIWSzsp+Zdu1NOQeregSqXNLT1p5FJaMQIPDdKTrew19JkAC4Mx+PEpMYNZ5YJ0ZcVrE8rA4SOZJd2rTmUlGImrYrQkAAAAAA=="></td>
            <td><a href="delete_store.php?storeID=8&cityID=3">Delete</a></td></tr></table></main>

</body>

<!-- Latest jQuery -->
<script src="JS/bootstrap.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="JS/jquery-3.2.1.min.js"></script>

</html>
