<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $market = htmlspecialchars($_POST['market']);
    $vendor_name = htmlspecialchars($_POST['vendor_name']);
    $business_type = htmlspecialchars($_POST['business_type']);
    $operational_challenges = htmlspecialchars($_POST['operational_challenges']);
    $financial_challenges = htmlspecialchars($_POST['financial_challenges']);
    $marketing_challenges = htmlspecialchars($_POST['marketing_challenges']);
    $customer_challenges = htmlspecialchars($_POST['customer_challenges']);
    $technological_challenges = htmlspecialchars($_POST['technological_challenges']);

    // Save the data to a file (or handle it as required, e.g., save to a database)
    $data = [
        'market' => $market,
        'vendor_name' => $vendor_name,
        'business_type' => $business_type,
        'operational_challenges' => $operational_challenges,
        'financial_challenges' => $financial_challenges,
        'marketing_challenges' => $marketing_challenges,
        'customer_challenges' => $customer_challenges,
        'technological_challenges' => $technological_challenges
    ];

    $file = 'responses.json';
    if (file_exists($file)) {
        $current_data = json_decode(file_get_contents($file), true);
        $current_data[] = $data;
        file_put_contents($file, json_encode($current_data));
    } else {
        file_put_contents($file, json_encode([$data]));
    }

    echo "Thank you for your submission!";
}
?>
