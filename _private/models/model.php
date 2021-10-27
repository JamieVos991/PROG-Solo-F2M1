<?php
// Model functions
// In dit bestand zet je ALLE functions die iets met data of de database doen

function getUsers()
{
	
	$connection = dbConnect();
	$sql        = "SELECT * FROM `users`";
	$statement  = $connection->query($sql);

	return $statement->fetchAll();
}

function getUserByEmail($email)
{

	$connection = dbConnect();
	$sql = "SELECT * FROM `gebruikers` WHERE email = :email";
	$statement = $connection->prepare($sql);
	$statement->execute(['email' => $email]);

	if ($statement-> rowCount() === 1) {
		return $statement->fetch();
	}

	return false;
}

function getUserById($id)
{

	$connection = dbConnect();
	$sql = "SELECT * FROM `gebruikers` WHERE `id` = :id";
	$statement = $connection->prepare($sql);
	$statement->execute(['id' => $id]);

	if ($statement-> rowCount() === 1) {
		return $statement->fetch();
	}

	return false;
}

function getUserByCode($code)
{

	$connection = dbConnect();
	$sql 		= "SELECT * FROM `gebruikers` WHERE `code` = :code";
	$statement = $connection->prepare($sql);
	$statement->execute(['code' => $code]);

	if ($statement-> rowCount() === 1) {
		return $statement->fetch();
	}

	return false;
}

function getAllBlogs()
{
	$connection = dbConnect();
	$sql        = "SELECT * FROM `blog`";
	$statement  = $connection->query($sql);

	return $statement->fetchAll();
}

function getAllTopics()
{
	$connection = dbConnect();
	$sql = 'SELECT * FROM `topics`';
	$statement =  $connection->query($sql);

	return $statement->fetchAll();
}

function addTopic($title, $description)
{
	$connection = dbConnect();
	$sql = "INSERT INTO `topics` (`id`, `title`, `description`) VALUES (NULL, :title, :description);";
	$statement = $connection->prepare($sql);
	$result = $statement->execute([
		'title' => $title,
		'description' => $description
	]);

	return $result;
}

function updateTopic($topicId, $newTitle, $newDescription)
{
	$connection = dbConnect();
	$sql = "UPDATE `topics` SET `title` = :new_title, `description` = :new_desc WHERE `topics`.`id` = :topic_id;";
	$statement = $connection->prepare($sql);

	return $statement->execute([
		'new_title' => $newTitle,
		'new_desc' => $newDescription,
		'topic_id' => $topicId
	]);
}

function deleteTopic($topicToDelete)
{
	$connection = dbConnect();
	$sql = "DELETE FROM `topics` WHERE `topics`.`id` = :topic_id";
	$statement = $connection->prepare($sql);

	$statement->execute([
		'topic_id' => $topicToDelete
	]);

	return $statement->rowCount();
}
