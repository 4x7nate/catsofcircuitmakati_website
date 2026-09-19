<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $viber = $_POST['viber'];
    $volunteer_feeder = $_POST['volunteer_feeder'];
    $schedule = isset($_POST['schedule']) ? implode(", ", $_POST['schedule']) : '';
    $backup_schedule = isset($_POST['backup_schedule']) ? implode(", ", $_POST['backup_schedule']) : '';
    $location = $_POST['location'];
    $vaccine = $_POST['vaccine'];
    $instagram = $_POST['instagram'];
    $teams = isset($_POST['teams']) ? implode(", ", $_POST['teams']) : '';

    $file = 'volunteers.xlsx';
    
    if (file_exists($file)) {
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($file);
        $sheet = $spreadsheet->getActiveSheet();
        $lastRow = $sheet->getHighestRow();
        $newRow = $lastRow + 1;
    } else {
        // Create new spreadsheet if file doesn't exist
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        
        // Add headers
        $headers = [
            'Full Name', 'Email', 'Phone', 'Viber', 'Volunteer Feeder', 
            'Schedule', 'Backup Schedule', 'Location', 'Vaccine Date',
            'Instagram', 'Teams', 'Submission Date'
        ];
        $sheet->fromArray([$headers], NULL, 'A1');
        $newRow = 2;
    }

    // Add new row of data
    $data = [
        $fullName, $email, $phone, $viber, $volunteer_feeder,
        $schedule, $backup_schedule, $location, $vaccine,
        $instagram, $teams, date('Y-m-d H:i:s')
    ];
    $sheet->fromArray([$data], NULL, 'A' . $newRow);

    // Auto-size columns
    foreach (range('A', 'L') as $col) {
        $sheet->getColumnDimension($col)->setAutoSize(true);
    }

    // Save file
    $writer = new Xlsx($spreadsheet);
    $writer->save($file);

    // Send success response
    echo json_encode(['success' => true, 'message' => 'Thank you for your application!']);
} else {
    // Handle invalid requests
    echo json_encode(['success' => false, 'message' => 'Invalid request method']);
}
?>