<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>General Settings</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --wp-admin-theme-color: #2271b1;
            --wp-admin-theme-color-darker-10: #1a5d8e;
            --wp-admin-theme-color-darker-20: #124a75;
        }
        
        body {
            background-color: #f0f0f1;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
            padding: 20px;
        }
        
        .wp-header {
            background-color: #fff;
            border-bottom: 1px solid #dcdcde;
            padding: 15px 20px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }
        
        .wp-logo {
            width: 40px;
            height: 40px;
            background-color: var(--wp-admin-theme-color);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 4px;
            font-weight: bold;
            margin-right: 15px;
        }
        
        .wp-settings-card {
            background-color: #fff;
            border: 1px solid #dcdcde;
            box-shadow: 0 1px 1px rgba(0,0,0,0.04);
            margin-bottom: 20px;
        }
        
        .wp-settings-header {
            border-bottom: 1px solid #dcdcde;
            padding: 15px 20px;
        }
        
        .wp-settings-body {
            padding: 20px;
        }
        
        .form-table th {
            width: 200px;
            padding: 20px 10px 20px 0;
            font-weight: 500;
        }
        
        .form-table td {
            padding: 15px 10px;
        }
        
        .form-control, .form-select {
            border-radius: 0;
            border-color: #8c8f94;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--wp-admin-theme-color);
            box-shadow: 0 0 0 1px var(--wp-admin-theme-color);
        }
        
        .submit {
            background-color: var(--wp-admin-theme-color);
            border-color: var(--wp-admin-theme-color-darker-20);
            color: #fff;
            text-decoration: none;
            text-shadow: none;
            padding: 6px 12px;
            border-radius: 3px;
            border-style: solid;
            border-width: 1px;
            cursor: pointer;
            font-size: 13px;
            line-height: 1.5;
        }
        
        .submit:hover {
            background-color: var(--wp-admin-theme-color-darker-10);
            border-color: var(--wp-admin-theme-color-darker-20);
            color: #fff;
        }
        
        .description {
            color: #646970;
            font-size: 13px;
            font-style: italic;
            margin-top: 4px;
        }
        
        .wp-footer {
            padding: 20px;
            color: #646970;
            font-size: 13px;
            border-top: 1px solid #dcdcde;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="wp-header">
        <div class="d-flex align-items-center">
            <div class="wp-logo">
                <a href="{{route('wa.admin')}}"><span class="text-color-white">WA</span></a>
            </div>
            <h1 class="h4 mb-0">General Settings</h1>
        </div>
    </div>
    
    <!-- Content -->
    <div class="wp-settings-card">
        <div class="wp-settings-header">
            <h2 class="h4 mb-0">General Settings</h2>
        </div>
        
        <div class="wp-settings-body">
            <form>
                <table class="form-table">
                    <tbody>
                        <tr>
                            <th scope="row"><label for="site-title">Site Title</label></th>
                            <td>
                                <input name="site-title" type="text" id="site-title" value="My WordPress Site" class="regular-text form-control">
                                <p class="description">The name of your site.</p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="tagline">Tagline</label></th>
                            <td>
                                <input name="tagline" type="text" id="tagline" value="Just another WordPress site" class="regular-text form-control">
                                <p class="description">In a few words, explain what this site is about.</p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="site-url">WordPress Address (URL)</label></th>
                            <td>
                                <input name="site-url" type="url" id="site-url" value="https://example.com" class="regular-text form-control">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="site-url">Site Address (URL)</label></th>
                            <td>
                                <input name="site-url" type="url" id="site-url" value="https://example.com" class="regular-text form-control">
                                <p class="description">Enter the address here if you want your site home page to be different from your WordPress installation directory.</p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="admin-email">Email Address</label></th>
                            <td>
                                <input name="admin-email" type="email" id="admin-email" value="admin@example.com" class="regular-text form-control">
                                <p class="description">This address is used for admin purposes, like new user notification.</p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Membership</th>
                            <td>
                                <label><input name="users_can_register" type="checkbox" id="users_can_register" value="1"> Anyone can register</label>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="new-user-role">New User Default Role</label></th>
                            <td>
                                <select name="new-user-role" id="new-user-role" class="form-select">
                                    <option value="subscriber" selected="selected">Subscriber</option>
                                    <option value="contributor">Contributor</option>
                                    <option value="author">Author</option>
                                    <option value="editor">Editor</option>
                                    <option value="administrator">Administrator</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="timezone">Timezone</label></th>
                            <td>
                                <select name="timezone" id="timezone" class="form-select">
                                    <option value="UTC+0" selected="selected">UTC+0</option>
                                    <option value="UTC+1">UTC+1</option>
                                    <option value="UTC+2">UTC+2</option>
                                    <!-- More options would be here -->
                                </select>
                                <p class="description">Choose a city in the same timezone as you.</p>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="date-format">Date Format</label></th>
                            <td>
                                <fieldset>
                                    <legend class="screen-reader-text"><span>Date Format</span></legend>
                                    <div class="form-check">
                                        <input type="radio" id="date-format1" name="date_format" value="F j, Y" class="form-check-input" checked>
                                        <label for="date-format1" class="form-check-label"><span>June 6, 2023</span></label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" id="date-format2" name="date_format" value="Y-m-d" class="form-check-input">
                                        <label for="date-format2" class="form-check-label"><span>2023-06-06</span></label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" id="date-format3" name="date_format" value="m/d/Y" class="form-check-input">
                                        <label for="date-format3" class="form-check-label"><span>06/06/2023</span></label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" id="date-format4" name="date_format" value="d/m/Y" class="form-check-input">
                                        <label for="date-format4" class="form-check-label"><span>06/06/2023</span></label>
                                    </div>
                                </fieldset>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="time-format">Time Format</label></th>
                            <td>
                                <fieldset>
                                    <legend class="screen-reader-text"><span>Time Format</span></legend>
                                    <div class="form-check">
                                        <input type="radio" id="time-format1" name="time_format" value="g:i a" class="form-check-input" checked>
                                        <label for="time-format1" class="form-check-label"><span>5:30 pm</span></label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" id="time-format2" name="time_format" value="g:i A" class="form-check-input">
                                        <label for="time-format2" class="form-check-label"><span>5:30 PM</span></label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" id="time-format3" name="time_format" value="H:i" class="form-check-input">
                                        <label for="time-format3" class="form-check-label"><span>17:30</span></label>
                                    </div>
                                </fieldset>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="start-of-week">Week Starts On</label></th>
                            <td>
                                <select name="start-of-week" id="start-of-week" class="form-select">
                                    <option value="0" selected="selected">Sunday</option>
                                    <option value="1">Monday</option>
                                    <option value="2">Tuesday</option>
                                    <option value="3">Wednesday</option>
                                    <option value="4">Thursday</option>
                                    <option value="5">Friday</option>
                                    <option value="6">Saturday</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <p class="submit">
                    <input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes">
                </p>
            </form>
        </div>
    </div>
    
    <!-- Footer -->
    <div class="wp-footer">
        <p>Thank you for creating with <a href="#">WordPress</a>.</p>
    </div>
    
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>