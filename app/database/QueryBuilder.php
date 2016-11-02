<?php 

class QueryBuilder
{
	protected $pdo;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	public function selectAllProf($table)
	{
		$db = new SQLite3('../../skloniste.db');

		$stmt = $db->query('SELECT * FROM '.$table);

		while($result = $stmt->fetchArray(SQLITE3_ASSOC)):
			$r[] = $result;
		endwhile;
		return $r;
	}

	public function storeProf($table, $name, $surname, $instrument, $bio)
	{
		$db = new SQLite3('../../skloniste.db');

		$query = "INSERT INTO ".$table." (name, surname, instrument, bio) VALUES ('$name', '$surname', '$instrument', '$bio')";

		if ($db->exec($query))
		{
			$stmt = $db->prepare('SELECT name, surname, instrument, bio FROM '.$table.' WHERE id=:id');			
			
			$result = $stmt->execute();
			
			return $result;
		}
		else
		{
			throw new Exception("QueryBuilder", 1);			
		}
	}

	public function showProf($id)
	{
		$db = new SQLite3('../../skloniste.db');

		$stmt = $db->query('SELECT name, surname, bio, instrument FROM profesori WHERE id ='.$id);

		while($result = $stmt->fetchArray(SQLITE3_ASSOC)):
			$r[] = $result;
		endwhile;

		return $r;
	}

	public function updateProf($id, $name, $surname, $instrument, $bio)
	{
		$db = new SQLite3('../../skloniste.db');

		$query = "UPDATE profesori SET name='Andrija', surname='$surname', instrument='$instrument', bio='$bio' WHERE id='$id'";

		if ($db->exec($query))
		{
			$stmt = $db->prepare('SELECT name, surname, instrument, bio FROM profesori WHERE id=:id');			
			
			$result = $stmt->execute();
			
			return $result;
		}
		else
		{
			throw new Exception("QueryBuilder", 1);			
		}
	}

	public function deleteProf($id)
	{
		$db = new SQLite3('../../skloniste.db');

		$query = "DELETE FROM profesori WHERE id='$id'";

		if ($db->exec($query))
		{
			$stmt = $db->prepare('SELECT * FROM profesori WHERE id=:id');			
			
			$result = $stmt->execute();
			
			return $result;
		}
		else
		{
			throw new Exception("QueryBuilder", 1);			
		}
	}

	public function check($email, $password)
	{
		$db = new SQLite3('../skloniste.db');

		$stmt = $db->query('SELECT * FROM users where id = 1;');

		$results = $stmt->fetchArray();

		return $results;
		
	}
}