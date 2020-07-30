<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\FollowingUser
 *
 * @property int $user_id
 * @property int $following_user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FollowingUser newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FollowingUser newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FollowingUser query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FollowingUser whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FollowingUser whereFollowingUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FollowingUser whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\FollowingUser whereUserId($value)
 */
	class FollowingUser extends \Eloquent {}
}

namespace App{
/**
 * App\Tweet
 *
 * @property int $id
 * @property int $user_id
 * @property string $body
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tweet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tweet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tweet query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tweet whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tweet whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tweet whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tweet whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Tweet whereUserId($value)
 */
	class Tweet extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $follows
 * @property-read int|null $follows_count
 * @property-read mixed $avatar
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

