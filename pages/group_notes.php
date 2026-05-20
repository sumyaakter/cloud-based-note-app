<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Group Notes</title>
    <style>
        body { font-family: 'Segoe UI', Arial, sans-serif; background: #121212; color: #ffffff; display: flex; margin: 0; }
        .sidebar { width: 240px; background: #1a1a1a; padding: 24px; box-sizing: border-box; height: 100vh; border-right: 1px solid #2d2d2d; }
        .sidebar h3 { color: #00bef8; }
        .sidebar a { display: block; color: #ccc; padding: 12px; text-decoration: none; border-radius: 6px; margin-bottom: 8px; }
        .sidebar a:hover { background: #252525; color: #00bef8; }
        .content { flex: 1; padding: 40px; }
        .notes-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 20px; }
        .note-card { background: #1e1e1e; padding: 20px; border-radius: 8px; border: 1px solid #2d2d2d; border-left: 4px solid #ffc107; }
        .note-card h4 { margin: 0 0 10px 0; }
        .note-card p { font-size: 14px; color: #aaa; }
        .meta-info { display: flex; justify-content: space-between; margin-top: 15px; font-size: 11px; color: #666; }
    </style>
</head>
<body>

    <div class="sidebar">
        <h3>Cloud Notes</h3>
        <a href="dashboard.php">My Personal Notes</a>
        <a href="create_note.php">+ Create Note</a>
        <a href="group_notes.php" style="background: #252525; color: #00bef8;">Group Shared Notes</a>
        <a href="audit_logs.php">Forensic Audit Logs</a>
    </div>

    <div class="content">
        <h2>Group Shared Workspace</h2>
        <p style="color: #aaa; margin-bottom: 30px;">Notes shared collaboratively within your research group.</p>

        <div class="notes-grid">
            <div class="note-card">
                <h4>System Requirements (SRS)</h4>
                <p>We need to map out the functional and non-functional requirements precisely for the upcoming submission deadline.</p>
                <div class="meta-info">
                    <span>By: member593@bubt.edu</span>
                    <span>2026-05-21</span>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
