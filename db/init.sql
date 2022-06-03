
CREATE TABLE projects (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
    name TEXT NOT NULL UNIQUE,
    thumbnail_path TEXT NOT NULL UNIQUE,
    page_url TEXT NOT NULL UNIQUE
);

CREATE TABLE categories (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
    name TEXT NOT NULL UNIQUE
);

CREATE TABLE project_categories (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
    project_id INTEGER NOT NULL,
    category_id INTEGER NOT NULL,
    FOREIGN KEY (project_id) REFERENCES projects(id),
    FOREIGN KEY (category_id) REFERENCES categories(id)
);

CREATE TABLE tools (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
    name TEXT NOT NULL UNIQUE
);

CREATE TABLE project_tools (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT UNIQUE,
    project_id INTEGER NOT NULL,
    tool_id INTEGER NOT NULL,
    FOREIGN KEY (project_id) REFERENCES projects(id),
    FOREIGN KEY (tool_id) REFERENCES tools(id)
);


INSERT INTO projects (name, thumbnail_path, page_url) VALUES ('test', 'test_path', 'test_url');
INSERT INTO projects (name, thumbnail_path, page_url) VALUES ('test2', 'test_path2', 'test_url2');