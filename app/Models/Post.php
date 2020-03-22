<?php
/**
 * Description of Post.php
 * @copyright Copyright (c) MISTER.AM, LLC
 * @author    Egor Gerasimchuk <egor@mister.am>
 */

namespace App\Models;


/**
 * App\Models\Post
 *
 * @property int $id
 * @property int $status
 * @property string $locale
 * @property string $slug
 * @property string $title
 * @property string $excerpt
 * @property string $body
 * @property int $author_id
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property User author
 * @method static \Illuminate\Database\Eloquent\Builder|static whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|static whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|static whereCreatedUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|static whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|static whereExcerpt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|static whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|static whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|static whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|static whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|static whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|static whereUrl($value)
 * @mixin \Eloquent
 */
class Post extends Model
{

    const STATUS_DRAFT = 10;
    const STATUS_PUBLISHED = 20;

    public $fillable = [
        'status',
        'locale',
        'slug',
        'title',
        'excerpt',
        'body',
        'author_id',
    ];

    public function author()
    {
        return $this->belongsTo(User::class);
    }

}
