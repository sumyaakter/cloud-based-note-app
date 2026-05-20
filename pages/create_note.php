<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Secure Note</title>
    <style>
        body { font-family: 'Segoe UI', Arial, sans-serif; background: #121212; color: #ffffff; display: flex; margin: 0; }
        .sidebar { width: 240px; background: #1a1a1a; padding: 24px; box-sizing: border-box; height: 100vh; border-right: 1px solid #2d2d2d; }
        .sidebar h3 { color: #00bef8; }
        .sidebar a { display: block; color: #ccc; padding: 12px; text-decoration: none; border-radius: 6px; margin-bottom: 8px; }
        .sidebar a:hover { background: #252525; color: #00bef8; }
        .content { flex: 1; padding: 40px; }
        .form-box { background: #1e1e1e; padding: 30px; border-radius: 10px; border: 1px solid #2d2d2d; max-width: 600px; }
        input, textarea { width: 100%; padding: 12px; margin-bottom: 20px; background: #252525; color: white; border: 1px solid #333; border-radius: 6px; box-sizing: border-box; }
        .checkbox-group { display: flex; align-items: center; gap: 10px; margin-bottom: 20px; color: #aaa; }
        .btn-save { padding: 12px 24px; background: #00bef8; border: none; color: black; font-weight: bold; border-radius: 6px; cursor: pointer; }
    </style>
</head>
<body>

    <div class="sidebar">
        <h3>Cloud Notes</h3>
        <a href="dashboard.php">My Personal Notes</a>
        <a href="create_note.php" style="background: #252525; color: #00bef8;">+ Create Note</a>
        <a href="group_notes.php">Group Shared Notes</a>
        <a href="audit_logs.php">Forensic Audit Logs</a>
    </div>

    <div class="content">
        <h2>Create New Secure Note</h2>
        <div class="form-box">
            <form action="dashboard.php" method="GET">
                <input type="text" placeholder="Enter Note Title" required>
                <textarea rows="8" placeholder="Type your secure note here..." required></textarea>
                
                <div class="checkbox-group">
                    <input type="checkbox" id="encrypt" style="width: auto; margin: 0;">
                    <label for="encrypt">Enable AES-256 End-to-End Encryption</label>
                </div>

                <input type="text" placeholder="Share with Group (Enter Member Emails separated by comma)">
                
                <button type="submit" class="btn-save">Save & Protect Note</button>
            </form>
        </div>
    </div>

</body>
</html>
