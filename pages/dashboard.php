<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Secure Notes</title>
    <style>
        body { font-family: 'Segoe UI', Arial, sans-serif; background: #121212; color: #ffffff; display: flex; margin: 0; height: 100vh; }
        .sidebar { width: 240px; background: #1a1a1a; padding: 24px; box-sizing: border-box; border-right: 1px solid #2d2d2d; }
        .sidebar h3 { color: #00bef8; margin-bottom: 30px; }
        .sidebar a { display: block; color: #ccc; padding: 12px; text-decoration: none; border-radius: 6px; margin-bottom: 8px; }
        .sidebar a:hover, .sidebar a.active { background: #252525; color: #00bef8; }
        .content { flex: 1; padding: 40px; overflow-y: auto; }
        .header-actions { display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; }
        .btn-add { padding: 10px 20px; background: #00bef8; color: black; text-decoration: none; font-weight: bold; border-radius: 6px; }
        .notes-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 20px; }
        .note-card { background: #1e1e1e; padding: 20px; border-radius: 8px; border: 1px solid #2d2d2d; border-left: 4px solid #00bef8; }
        .note-card h4 { margin: 0 0 10px 0; color: #fff; }
        .note-card p { font-size: 14px; color: #aaa; line-height: 1.5; }
        .note-card small { color: #666; font-size: 12px; }
    </style>
</head>
<body>

    <div class="sidebar">
        <h3>Cloud Notes</h3>
        <a href="dashboard.php" class="active">My Personal Notes</a>
        <a href="create_note.php">+ Create Note</a>
        <a href="group_notes.php">Group Shared Notes</a>
        <a href="audit_logs.php">Forensic Audit Logs</a>
        <a href="../login.php" style="color: #ff5555; margin-top: auto;">Logout</a>
    </div>

    <div class="content">
        <div class="header-actions">
            <h2>My Personal Notes</h2>
            <a href="create_note.php" class="btn-add">+ Add New Note</a>
        </div>

        <div class="notes-grid">
            <div class="note-card">
                <h4>Lab Assignment Topics</h4>
                <p>Remember to prepare the SRS documentation and match features with the course outline modules before Thursday.</p>
                <small>Created: 2026-05-21 10:00 AM</small>
            </div>
            <div class="note-card">
                <h4>Project Credentials</h4>
                <p>Encryption Key: AES-256-SECRET-KEY (Keep this hidden from git repository).</p>
                <small>Created: 2026-05-20 04:15 PM</small>
            </div>
        </div>
    </div>

</body>
</html>
