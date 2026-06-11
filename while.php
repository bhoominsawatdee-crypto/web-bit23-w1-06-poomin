<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Sarabun:wght@400;600;700&family=IBM+Plex+Mono:wght@400;600&display=swap');

        :root {
    --red:        #2196f3;        /* สีฟ้าหลัก */
    --red-dark:   #1565c0;        /* ฟ้าเข้มตอน hover */
    --red-dim:    rgba(33, 243, 121, 0.12);   /* glow บาง ๆ */
    --red-border: rgba(33, 58, 243, 0.35);   /* ขอบฟ้า */
    --bg:         #a26210;        /* พื้นหลังน้ำเงินเกือบดำ */
    --surface:    #111827;        /* card/form */
    --border:     #1e2d40;        /* เส้นขอบ */
    --text:       #e8f1ff;        /* ขาวอมฟ้า */
    --muted:      #6b8aad;        /* เทาอมฟ้า */
}

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Sarabun', sans-serif;
            background-color: #cd5eb1;
            color: var(--text);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 48px 20px 64px;
            /* subtle grid texture */
            background-image: linear-gradient(rgba(255,255,255,.02) 1px, transparent 1px),
                              linear-gradient(90deg, rgba(255,255,255,.02) 1px, transparent 1px);
            background-size: 40px 40px;
        }

        /* ── ชื่อหัว ── */
        h1 {
            font-family: 'IBM Plex Mono', monospace !important;
            color: var(--text) !important;
            font-size: 0.78rem !important;
            font-weight: 400 !important;
            letter-spacing: 0.06em;
            border-left: 3px solid var(--red);
            padding: 8px 14px;
            background: var(--surface);
            border-radius: 0 6px 6px 0;
            margin-bottom: 28px;
            width: 100%;
            max-width: 420px;
        }

        /* ── ลิงก์ ── */
        a {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            color: var(--red);
            text-decoration: none;
            font-size: 0.88rem;
            font-weight: 600;
            letter-spacing: 0.04em;
            margin-bottom: 32px;
            padding: 6px 0;
            border-bottom: 1px solid var(--red-border);
            transition: color 0.15s, border-color 0.15s;
        }
        a::before { content: '→'; font-family: monospace; }
        a:hover { color: #ff4444; border-color: #ff4444; }

        /* ── ฟอร์ม ── */
        form {
            width: 100%;
            max-width: 420px;
            background: var(--surface);
            border: 1px solid var(--border);
            border-top: 2px solid var(--red);
            border-radius: 10px;
            padding: 28px 24px 24px;
            margin-bottom: 40px;
        }

        form label {
            display: block;
            font-size: 0.78rem;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: var(--muted);
            margin-bottom: 10px;
        }

        form input[type="number"] {
            display: block;
            width: 100%;
            background: var(--bg);
            border: 1px solid var(--border);
            border-radius: 7px;
            padding: 13px 16px;
            color: var(--text);
            font-family: 'IBM Plex Mono', monospace;
            font-size: 1.25rem;
            outline: none;
            margin-bottom: 14px;
            transition: border-color 0.15s;
        }
        form input[type="number"]:focus {
            border-color: var(--red);
            box-shadow: 0 0 0 3px var(--red-dim);
        }
        form input[type="number"]::placeholder { color: #444; }

        form input[type="submit"] {
            display: block;
            width: 100%;
            background: var(--red);
            border: none;
            border-radius: 7px;
            padding: 13px;
            color: #fff;
            font-family: 'Sarabun', sans-serif;
            font-size: 1rem;
            font-weight: 700;
            letter-spacing: 0.06em;
            cursor: pointer;
            transition: background 0.15s, transform 0.1s;
        }
        form input[type="submit"]:hover  { background: var(--red-dark); }
        form input[type="submit"]:active { transform: scale(0.98); }

        /* ── หัวข้อผลลัพธ์ ── */
        h2 {
            font-family: 'IBM Plex Mono', monospace;
            font-size: 1rem;
            color:var(--red);
            letter-spacing: 0.05em;
            margin-bottom: 16px;
            text-align: left;
            width: 100%;
            max-width: 420px;
            padding-bottom: 8px;
            border-bottom: 1px solid var(--border);
        }

        /* ── บรรทัดผลคูณ ── */
        .result-block {
            width: 100%;
            max-width: 420px;
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        /* จัด <br> ที่ echo ออกมาให้หาย */
        br { display: none; }
    </style>
</head>
<body>

    <?php
        echo " <h1 style='color:blue'> w1 - Poomin sawatdee BIT2/3 No.6 </h1> ";
    ?>

    <a href="index.php">for loop</a>

    <form action="">
        <label for="">เลขเเม่สูตรคูณ</label> <br>
        <input type="number" name="num" id="" required> <input type="submit" value="คำนวณ">
    </form>

    <?php
        if(isset($_GET["num"])){

            $num = $_GET["num"];

            echo "<h2> สูตรคูณเเม่ ". $num ." </h2>";
            echo "<div class='result-block'>";

            // FIXED: Added the multiplication math inside the loop
            for($i = 1; $i <= 12; $i++){
                $result = $num * $i;
                $highlight = ($i % 2 == 0) ? "style='background:#1e1e1e;'" : "";
                echo "<div class='row' $highlight>"
                   . "<span class='eq'>" . $num . " × " . $i . "</span>"
                   . "<span class='sep'>=</span>"
                   . "<span class='ans'>" . $result . "</span>"
                   . "</div>";
            }

            echo "</div>";
        }
    ?>

    <style>
        .row {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 9px 14px;
            border-radius: 6px;
            font-family: 'IBM Plex Mono', monospace;
            font-size: 0.95rem;
            transition: background 0.1s;
        }
        .row:hover { background: var(--red-dim) !important; }

        .eq  { color: var(--muted); min-width: 80px; }
        .sep { color: var(--border); }
        .ans { color: var(--text); font-weight: 600; font-size: 1.05rem; margin-left: auto; }
    </style>

</body>
</html>

