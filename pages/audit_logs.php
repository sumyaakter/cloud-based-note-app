<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forensic Audit Logs</title>
    <style>
        body { font-family: 'Segoe UI', Arial, sans-serif; background: #121212; color: #ffffff; display: flex; margin: 0; }
        .sidebar { width: 240px; background: #1a1a1a; padding: 24px; box-sizing: border-box; height: 100vh; border-right: 1px solid #2d2d2d; }
        .sidebar h3 { color: #00bef8; }
        .sidebar a { display: block; color: #ccc; padding: 12px; text-decoration: none; border-radius: 6px; margin-bottom: 8px; }
        .sidebar a:hover { background: #252525; color: #00bef8; }
        .content { flex: 1; padding: 40px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; background: #1e1e1e; border-radius: 8px; overflow: hidden; }
        th, td { padding: 14px; text-align: left; border-bottom: 1px solid #2d2d2d; font-size: 14px; }
        th { background: #252525; color: #00bef8; }
        .badge { padding: 4px 8px; border-radius: 4px; font-size: 12px; font-weight: bold; }
        .badge.success { background: rgba(40, 167, 69, 0.2); color: #28a745; }
        .badge.warning { background: rgba(255, 193, 7, 0.2); color: #ffc107; }
    </style>
</head>
<body>

    <div class="sidebar">
        <h3>Cloud Notes</h3>
        <a href="dashboard.php">My Personal Notes</a>
        <a href="create_note.php">+ Create Note</a>
        <a href="group_notes.php">Group Shared Notes</a>
        <a href="audit_logs.php" style="background: #252525; color: #00bef8;">Forensic Audit Logs</a>
    </div>

    <div class="content">
        <h2>Digital Forensic Audit Trail</h2>
        <p style="color: #aaa;">Immutable tracking logs for security compliance audits.</p>

        <table>
            <thead>
                <tr>
                    <th>Timestamp</th>
                    <th>User Session</th>
                    <th>Action Executed</th>
                    <th>Source IP</th>
                    <th>Security Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2026-05-21 11:20:05</td>
                    <td>user593@bubt.edu</td>
                    <td>User Login (Session Initiated)</td>
                    <td>192.168.43.10</td>
                    <td><span class="badge success">SECURE</span></td>
                </tr>
                <tr>
                    <td>2026-05-21 11:22:14</td>
                    <td>user593@bubt.edu</td>
                    <td>Created Note ID #4012</td>
                    <td>192.168.43.10</td>
                    <td><span class="badge success">ENCRYPTED</span></td>
                </tr>
                <tr>
                    <td>2026-05-21 11:25:40</td>
                    <td>user593@bubt.edu</td>
                    <td>Shared Note ID #4012 with Group</td>
                    <td>192.168.43.10</td>
                    <td><span class="badge warning">SHARED</span></td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>
