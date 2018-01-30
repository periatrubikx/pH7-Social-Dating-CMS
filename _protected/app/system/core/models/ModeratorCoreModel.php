<?php
/**
 * @author         Pierre-Henry Soria <ph7software@gmail.com>
 * @copyright      (c) 2012-2018, Pierre-Henry Soria. All Rights Reserved.
 * @license        GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @package        PH7 / App / System / Core / Model
 */

namespace PH7;

use PH7\Framework\Mvc\Model\Engine\Db;

class ModeratorCoreModel extends AdminCoreModel
{
    public function totalPictureAlbums()
    {
        $rStmt = Db::getInstance()->prepare('SELECT COUNT(albumId) AS totalAlbums FROM' . Db::prefix('AlbumsPictures') . 'WHERE approved = \'0\'');
        $rStmt->execute();
        $iTotalAlbums = (int)$rStmt->fetchColumn();
        Db::free($rStmt);

        return $iTotalAlbums;
    }

    public function totalPictures()
    {
        $rStmt = Db::getInstance()->prepare('SELECT COUNT(pictureId) AS totalPictures FROM' . Db::prefix('Pictures') . 'WHERE approved = \'0\'');
        $rStmt->execute();
        $iTotalPictures = (int)$rStmt->fetchColumn();
        Db::free($rStmt);

        return $iTotalPictures;
    }

    public function totalVideoAlbums()
    {
        $rStmt = Db::getInstance()->prepare('SELECT COUNT(albumId) AS totalAlbums FROM' . Db::prefix('AlbumsVideos') . 'WHERE approved = \'0\'');
        $rStmt->execute();
        $iTotalAlbums = (int)$rStmt->fetchColumn();
        Db::free($rStmt);

        return $iTotalAlbums;
    }

    public function totalVideos()
    {
        $rStmt = Db::getInstance()->prepare('SELECT COUNT(videoId) AS totalVideos FROM' . Db::prefix('Videos') . 'WHERE approved = \'0\'');
        $rStmt->execute();
        $iTotalVideos = (int)$rStmt->fetchColumn();
        Db::free($rStmt);

        return $iTotalVideos;
    }

    public function totalAvatars()
    {
        $rStmt = Db::getInstance()->prepare('SELECT COUNT(avatar) AS totalAvatars FROM' . Db::prefix('members') . 'WHERE approvedAvatar = \'0\'');
        $rStmt->execute();
        $iTotalAvatars = (int)$rStmt->fetchColumn();
        Db::free($rStmt);

        return $iTotalAvatars;
    }

    public function totalBackgrounds()
    {
        $rStmt = Db::getInstance()->prepare('SELECT COUNT(file) AS totalBackgrounds FROM' . Db::prefix('MembersBackground') . 'WHERE approved = \'0\'');
        $rStmt->execute();
        $iTotalBackgrounds = (int)$rStmt->fetchColumn();
        Db::free($rStmt);

        return $iTotalBackgrounds;
    }

    public function totalNotes()
    {
        $rStmt = Db::getInstance()->prepare('SELECT COUNT(noteId) AS totalNotes FROM' . Db::prefix('Notes') . 'WHERE approved = \'0\'');
        $rStmt->execute();
        $iTotalNotes = (int)$rStmt->fetchColumn();
        Db::free($rStmt);

        return $iTotalNotes;
    }
}
