<?php


namespace App\Services;


use App\Repositories\CommentRepository;

class CommentService
{
    /**
     * Store comment
     * @param $message
     * @param $post
     * @param $user
     * @param $recaptcha
     * @param null $comment_id
     * @return object
     */
    public static function store($message,$post,$user,$recaptcha,$comment_id = null)
    {
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe&response=".$recaptcha);

        if ($response) {
            CommentRepository::create($message,$post,$user,$comment_id);

            return (object) [
                'code' => 200,
                'message' => 'Your message has been successfully sent'
            ];
        } else {
            return (object) [
                'code' => 422,
            ];
        }
    }

    /**
     * Get all comments by post slug
     * @param $slug
     * @return object
     */
    public static function getCommentsByPost($slug)
    {
        $post = PostService::getBySlug($slug);

        $comments = CommentRepository::allCommentsByPost($post->id);

        return (object) [
            'post' => $post,
            'comments' => $comments
        ];

    }

    /**
     * Update comment likes and dislikes
     * @param $commentId
     * @param $likes
     * @param $dislikes
     * @return object
     */
    public static function updateCommentVotes($commentId,$likes,$dislikes)
    {
        return CommentRepository::updateVotes($commentId,$likes,$dislikes);
    }

    /**
     * Get all sorted comments by post slug
     * Updated 1.5.2020 Obrisan case newest kao visak
     * @param $slug
     * @return object
     */
    public static function getSortedComments($slug,$type)
    {
        $post = PostService::getBySlug($slug);

            switch ($type) {
                case 'liked':
                    $comments = CommentRepository::sortedComments($post->id,'like');
                    break;
                case 'disliked':
                    $comments = CommentRepository::sortedComments($post->id,'dislike');
                    break;
                default:
                    $comments = CommentRepository::sortedComments($post->id,'created_at');
                    break;
            }

            return (object) [
                'post' => $post,
                'comments' => $comments
            ];

    }
}
