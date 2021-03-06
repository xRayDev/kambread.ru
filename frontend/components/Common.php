<?php
namespace frontend\components;

use Yii;
use yii\base\Component;
use yii\db\Exception;
use yii\helpers\BaseFileHelper;
use yii\helpers\Url;

class Common extends Component
{
    const EVENT_NOTIFY = 'notify_admin';

    public function sendMail($event = '', $name = '', $email = '', $emailTo = '', $subject = '', $body = '')
    {
        $body = preg_replace("(\r\n|\n|\r)", "<br/>", $body);
        $message = Yii::$app->mailer->compose();
        $message->setFrom(['web.notify@kambread.ru' => $name]);
        $message->setTo([$emailTo => $event])
            ->setSubject($subject)
            ->setReplyTo($email)
            ->setHtmlBody($body)
            ->send();
        $this->trigger(self::EVENT_NOTIFY);
        return true;
    }

    public function notifyAdmin($event)
    {
        Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
        return $this->refresh();
    }

    public static function getTitle($data)
    {
        return $data['name'];
    }

    public static function getS_Title($data)
    {
        return $data['s_name'];
    }

    public static function getCreationDate($data)
    {
        return Yii::$app->formatter->asDate($data['created_at'], 'd MMMM yyyy');
    }

    public static function getImageAward($data, $general = true, $original = false)
    {
        $image = [];
        $base = '/';
        if ($general) {
            $image[] = $base . 'uploads/awards/' . $data['idawards'] . '/general/small_' . $data['general_image'];
        } else {
            $path = Yii::getAlias("@frontend/web/uploads/awards/" . $data['idawards']);
            $files = BaseFileHelper::findFiles($path);
            foreach ($files as $file) {
                if (strstr($file, "small_") && !strstr($file, "general")) {
                    $image[] = $base . 'uploads/awards/' . $data['idawards'] . '/' . basename($file);
                }
            }
        }

        return $image;
    }

    public static function getImageProduct($data, $original = false)
    {
        $image = [];
        $base = '/';

        if ($original) {
            $image[] = $base . 'uploads/products/' . $data['idproduct'] . '/general/' . $data['general_image'];
        } else {
            $image[] = $base . 'uploads/products/' . $data['idproduct'] . '/general/small_' . $data['general_image'];
        }
        /*
            $path = Yii::getAlias("@frontend/web/uploads/products/".$data['idproduct']);
            $files = BaseFileHelper::findFiles($path);
            foreach($files as $file) {
                if (strstr($file, "small_") && !strstr($file, "general")) {
                    $image[] = $base . 'uploads/products/' . $data['idproduct'] . '/' . basename($file);
                }
            }
        */
        return $image;
    }

    public static function getImageNews($data, $general = true, $original = false)
    {
        $image = [];
        $base = '/';
        if ($general) {
            $image[] = $base . 'uploads/news/' . $data['idnews'] . '/general/small_' . $data['general_image'];
        } else {
            $path = Yii::getAlias("@frontend/web/uploads/news/" . $data['idnews']);
            $files = BaseFileHelper::findFiles($path);
            foreach ($files as $file) {
                if (strstr($file, "small_") && !strstr($file, "general")) {
                    $image[] = $base . 'uploads/news/' . $data['idnews'] . '/' . basename($file);
                }
            }
        }

        return $image;
    }

    public static function substr($text, $start = 0, $end = 50)
    {
        return mb_substr($text, $start, $end);
    }

    public static function getTypeProduct($row)
    {
        if (($row['new'])) {
            return 'Новинка';
        } else if (($row['recommend'])) {
            return 'Рекомендуем';
        }
        return false;
    }

    public function getUrlProduct($row)
    {
        return Url::to(['/products/default/view-product', 'id' => $row['idproduct']]);
    }

    public function getUrlNews($row)
    {
        return Url::to(['/news/default/view-news', 'id' => $row['idnews']]);
    }
}
