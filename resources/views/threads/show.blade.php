@extends('layouts.app')
@section('title')
    Discussion Board - Natural Living
@endsection


@section('content')
    <div style="width:90%; margin-left: auto; margin-right: auto;">

        <h2 style="text-align:center;">Natural Living Discussion Board</h2>

        <table style="width: 90%; border: 1px solid black; background-color: #F6FEBE; padding: 15px; font-family:Arial, sans-serif">
            <tr>
                <td colspan="2" style="font-size: 25px; font-weight: bold; padding-bottom: 15px;" />
                    <?php echo $thread->thread_topic; ?>
                </td>
            </tr>
            <tr>
                <td style="font-size: 15px; color:green; font-weight: bold;"><?php echo $thread->thread_username; ?></td>
                <td style="font-size: 15px; color:#0e84b5; font-weight: bold;"><?php echo $thread->thread_date; ?></td>
            </tr>
            <tr>
                <td colspan="2" style="padding-top: 15px; font-size: 14px; line-height: 1.5;">
                    <?php echo $thread->thread_content; ?>
                </td>
            </tr>
        </table>
        <p>
            <a href="{{ url('/forum')}}"><button type="button">Reply</button></a>
            <a href="{{ url('/thread/checkpwd01',$thread->id) }}" style="<?php if(count($comments) != 0){echo 'display:none;';} else{echo 'display:inline;';}?>"><button type="button">Edit</button></a>
            <a href="{{ url('/thread/checkpwd02',$thread->id) }}"><button type="button">Delete</button></a>
            <a href="{{ url('/thread', $thread->thread_forum)}}"><button type="button">Back to the List</button></a>
        </p>


        <?php foreach($comments as $comment){ ?>
        <table style="margin-bottom: 20px; width: 90%; border: 1px solid black; background-color: white; padding: 15px; font-family:Arial, sans-serif">
            <tr>
                <td colspan="2" style="font-size: 25px; font-weight: bold; padding-bottom: 15px;" />
                RE: <?php echo $thread->thread_topic; ?>
                </td>
            </tr>
            <tr>
                <td style="font-size: 15px; color:green; font-weight: bold;"><?php echo $comment->com_username; ?></td>
                <td style="font-size: 15px; color:#0e84b5; font-weight: bold;"><?php echo $comment->com_date; ?></td>
            </tr>
            <tr>
                <td colspan="2" style="padding-top: 15px; font-size: 14px; line-height: 1.5;">
                    <?php echo $comment->com_comment; ?>
                </td>
            </tr>
        </table>
        <p>
            <a href="{{ url('/forum')}}"><button type="button">Delete</button></a>
        </p>
        <?php } ?>
    </div>
@endsection
