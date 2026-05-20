<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cloud Notes-Login</title>
    <style>
        body { font-family: 'Segoe UI', Arial, sans-serif; background: #121212; color: #ffffff; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .login-box { background: #1e1e1e; padding: 40px; border-radius: 12px; box-shadow: 0 8px 24px rgba(0,0,0,0.6); width: 320px; border: 1px solid #2d2d2d; }
        h2 { text-align: center; margin-bottom: 24px; color: #00bef8; }
        label { display: block; margin-bottom: 6px; font-size: 14px; color: #aaa; }
        input { width: 100%; padding: 12px; margin-bottom: 20px; border: 1px solid #333; background: #252525; color: white; border-radius: 6px; box-sizing: border-box; }
        input:focus { border-color: #00bef8; outline: none; }
        button { width: 100%; padding: 12px; background: #00bef8; border: none; color: #000; font-weight: bold; font-size: 16px; border-radius: 6px; cursor: pointer; transition: 0.3s; }
        button:hover { background: #009ecf; }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Cloud Note Application </h2>
        <form action="pages/dashboard.php" method="GET">
            <label>Email Address</label>
            <input type="email" placeholder="username@bubt.edu" required>
            
            <label>Password</label>
            <input type="password" placeholder="••••••••" required>
            
            <button type="submit">Click to login </button>
        </form>
    </div>
</body>
</html>
