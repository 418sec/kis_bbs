<?PHP
function send_to_slack($message) {
  $webhook_url = 'https://hooks.slack.com/services/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';
  $options = array(
    'http' => array(
      'method' => 'POST',
      'header' => 'Content-Type: application/json',
      'content' => json_encode($message),
    )
  );
  $response = file_get_contents($webhook_url, false, stream_context_create($options));
  return $response === 'ok';
}

$message = array(
  'text' => $to_slack_text,
);

send_to_slack($message);
?>