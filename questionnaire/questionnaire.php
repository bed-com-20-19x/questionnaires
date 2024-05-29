<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Market Vendor Questionnaire</title>
    <style>
        body {  font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2; }
        .container {  max-width: 800px;
            margin: 100px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
             }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; }
        .form-group input, .form-group textarea, .form-group select { width: 100%; padding: 8px; }
        .form-group textarea { height: 100px; }
        .btn { padding: 10px 15px; background-color: #007BFF; color: #fff; border: none; border-radius: 5px; cursor: pointer; }
        .btn:hover { background-color: #0056b3; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Market Vendor Questionnaire</h2>
        <form action="process_questionnaire.php" method="post">
            <div class="form-group">
                <label for="market">Market</label>
                <select id="market" name="market" required>
                    <option value="">Select Market</option>
                    <option value="Chinamwali">Chinamwali</option>
                    <option value="Mponda">Mponda</option>
                    <option value="Zomba Town Market">Zomba Town Market</option>
                </select>
            </div>
            <div class="form-group">
                <label for="business_name">Business Name</label>
                <input type="text" id="business_name" name="business_name" required>
            </div>
            <div class="form-group">
                <label for="owner_name">Owner Name</label>
                <input type="text" id="owner_name" name="owner_name" required>
            </div>
            <div class="form-group">
                <label for="contact">Contact Information</label>
                <input type="text" id="contact" name="contact" required>
            </div>
            <div class="form-group">
                <label for="operational_challenges">Operational Challenges</label>
                <textarea id="operational_challenges" name="operational_challenges" required></textarea>
            </div>
            <div class="form-group">
                <label for="financial_challenges">Financial Challenges</label>
                <textarea id="financial_challenges" name="financial_challenges" required></textarea>
            </div>
            <div class="form-group">
                <label for="marketing_challenges">Marketing Challenges</label>
                <textarea id="marketing_challenges" name="marketing_challenges" required></textarea>
            </div>
            <div class="form-group">
                <label for="customer_challenges">Customer-related Challenges</label>
                <textarea id="customer_challenges" name="customer_challenges" required></textarea>
            </div>
            <div class="form-group">
                <label for="technological_challenges">Technological Challenges</label>
                <textarea id="technological_challenges" name="technological_challenges" required></textarea>
            </div>
            <button type="submit" class="btn">Submit</button>
        </form>
    </div>
</body>
</html>
